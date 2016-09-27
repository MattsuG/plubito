<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Talk;

use Auth;

use Input;

use App;

class PayPalController extends Controller
{
	private	$api_user_name = 'noblun0405-facilitator_api1.gmail.com';

	private $api_user_password = 'KJEQRZN9AHNRAUPA';

	private $api_signature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31Arc06.wtJVP9xHKVOzDaz8OvKpVi';
	private $api_version = '204';

	private $sandbox = 'sandbox.';

	private $tax_rate = 8;



	public function setExpressCheckout(Request $request) {


		$this->validate($request, ['talk_id' => 'regex:/[0-9]+/']);
		$talk = Talk::findOrFail($request->talk_id);

		if (!$talk->applications->contains(Auth::user()->id)) {
			return back();
			die();
		}

		$app = $talk->applications()->where('user_id', Auth::user()->id)->first();

		if ((int)$app->pivot->approved_flag === 0 || (int)$app->pivot->paid_flag === 1) {
			return back();
			die();
		}

		$return_url        = 'https://plubito-rictory.c9users.io/payment/confirm';
		$cancel_url        = 'https://plubito-rictory.c9users.io/user/mypage';
		$amount            = $talk->price + $talk->price * $this->tax_rate / 100;

		if(App::environment('staging')) {
			$this->sandbox = '';
		}

		//PayPal Express CheckoutAPIを実行
		//$api = 'https://api-3t.'.$this->sandbox.'paypal.com/nvp?METHOD=SetExpressCheckout&VERSION='.$this->api_version.'$&USER='.$api_user_name.'&PWD='.$api_user_password.'&SIGNATURE='.$api_signature.'&RETURNURL='.$return_url.'&CANCELURL='.$cancel_url.'&L_PAYMENTREQUEST_0_AMT0='.$talk->price.'.0&L_PAYMENTREQUEST_0_NAME0='.$talk->title.'&L_PAYMENTREQUEST_0_TAXAMT0='.$tax_rate.'.00&L_PAYMENTREQUEST_0_QTY0=0&L_PAYMENTREQUEST_0_ITEMCATEGORY0=Digital&PAYMENTREQUEST_0_PAYMENTACTION=Sale&PAYMENTREQUEST_0_CURRENCYCODE=JPY&PAYMENTREQUEST_0_AMT='.$amount.'.0&PAYMENTREQUEST_0_ITEMAMT='.$talk->price.'.0&REQCONFIRMSHIPPING=0&NOSHIPPING=1&SOLUTIONTYPE=Sole';

		 $api_request = 'https://api-3t.'.$this->sandbox.'paypal.com/nvp?USER='.$this->api_user_name.'&PWD='.$this->api_user_password.'&SIGNATURE='.$this->api_signature.'&METHOD=SetExpressCheckout&VERSION='.$this->api_version.'&PAYMENTREQUEST_0_AMT='.$amount.'&PAYMENTREQUEST_0_CURRENCYCODE=JPY&PAYMENTREQUEST_0_PAYMENTACTION=Sale&cancelUrl='.$cancel_url.'&returnUrl='.$return_url;


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_request);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		preg_match('/ACK=(\w+)/', $response, $ack);

		if($ack[1] === 'Success') {
			preg_match('/EC%2d(\w+)/', $response, $token);

			return redirect('https://www.'.$this->sandbox.'paypal.com/jp/cgi-bin/webscr?cmd=_express-checkout&token=EC-'.$token[1]);
		} else {
			echo $response;
		}

	}

	public function getConfirm(Request $request) {
		$token = Input::get('token');

		if (empty($token)) {
			return redirect('mentor/mypage');
		}
		//DBにすでにトークンが存在したらリダイレクト

		if(App::environment('staging')) {
			$this->sandbox = '';
		}

		$api_request = 'https://api-3t.'.$this->sandbox.'paypal.com/nvp?METHOD=GetExpressCheckoutDetails&VERSION='.$this->api_version.'&USER='.$this->api_user_name.'&PWD='.$this->api_user_password.'&SIGNATURE='.$this->api_signature.'&TOKEN='.$token;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_request);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		preg_match('/ACK=(\w+)/', $response, $ack);

		if($ack[1] === 'Success') {
			preg_match('/EC%2d(\w+)/', $response, $token);

			$request->session()->put('paypal_token', $token[1]);
			$request->session()->put('payer_id', Input::get('PayerID'));

			return view('payment/confirm');
		} else {
			echo '通信に失敗しました。決済は完了していませんので、もう一度時間を空けてお試しください。';
		}
	}

	public function postConfirm(Request $request) {

		$api_request = '	
https://api-3t.'.$this->sandbox.'paypal.com/nvp?METHOD=DoExpressCheckoutPayment&VERSION='.$this->api_version.'&USER='.$this->api_user_name.'&PWD='.$this->api_user_password.'&SIGNATURE='.$this->api_signature.'&TOKEN=EC-'.$request->session()->get('paypal_token').'&PAYERID='.$request->session()->get('payer_id').'&PAYMENTREQUEST_0_ITEMAMT=3000&PAYMENTREQUEST_0_TAXAMT='.$this->tax_rate.'&PAYMENTREQUEST_0_AMT=3240&PAYMENTREQUEST_0_PAYMENTACTION=Sale&PAYMENTREQUEST_0_CURRENCYCODE=JPY
';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_request);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		echo $response.'<br>';
		preg_match('/ACK=(\w+)/', $response, $ack);

		// if($ack[1] === 'Success') {
		// 	$user = User::find(Auth::user()->id);
		// 	// $user->applications()->sync([$request->talk_id => ['approved_flag' => 1, 'paid_at' => Carbon::now(),]], false);

		// 	\Session::flash('flash_message', '支払いが完了しました。トークが完了したら、必ず終了ボタンを押してください。');

		// 	return redirect('user/mypage');
		// } else {
		// 	echo '通信に失敗しました。決済は完了していませんので、もう一度時間を空けてお試しください。';
		// }
	}

    
}
