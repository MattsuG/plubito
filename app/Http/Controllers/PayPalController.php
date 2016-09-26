<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Talk;

use Auth;
class PayPalController extends Controller
{
	public function setExpressCheckout(Request $request) {

		$this->validate($request, ['talk_id' => 'regex:/[0-9]+/']);
		$talk = Talk::findOrFail($request->talk_id);

		if (!$talk->applications->contains(Auth::user()->id)) {
			return back();
			die();
		}

		$app = $talk->applications()->where('user_id', Auth::user()->id);

		// if ((int)$app->pivot->approved_flag === 0 || (int)$app->pivot->paid_flag === 1) {
		// 	return back();
		// 	die();
		// }

		$api_user_name     = 'noblun0405-facilitator_api1.gmail.com';
		$api_user_password = 'KJEQRZN9AHNRAUPA';
		$api_signature     = 'AFcWxV21C7fd0v3bYYYRCpSSRl31Arc06.wtJVP9xHKVOzDaz8OvKpVi';
		$return_url        = 'https://plubito-rictory.c9users.io/payment/confirm';
		$cancel_url        = 'https://plubito-rictory.c9users.io/user/mypage';
		$tax_rate          = 8;
		$amount            = $talk->price + $talk->price * $tax_rate / 100; 

		//PayPal Express CheckoutAPIを実行
		// $response = file_get_contents('https://api-3t.sandbox.paypal.com/nvp?METHOD=SetExpressCheckout&VERSION=204&USER='.$api_user_name.'&PWD='.$api_user_password.'&SIGNATURE='.$api_signature.'&RETURNURL='.$return_url.'&CANCELURL='.$cancel_url.'&L_PAYMENTREQUEST_0_AMT0='.$talk->price.'.0&L_PAYMENTREQUEST_0_NAME0='.$talk->title.'&L_PAYMENTREQUEST_0_TAXAMT0='.$tax_rate.'.00&L_PAYMENTREQUEST_0_ITEMCATEGORY0=Digital&PAYMENTREQUEST_0_PAYMENTACTION=Sale&PAYMENTREQUEST_0_CURRENCYCODE=JPY&PAYMENTREQUEST_0_AMT='.$amount.'.0&PAYMENTREQUEST_0_ITEMAMT='.$talk->price.'.0&REQCONFIRMSHIPPING=0&NOSHIPPING=1&SOLUTIONTYPE=Sole');
		$api = 'https://api-3t.sandbox.paypal.com/nvp?USER='.$api_user_name.'&PWD='.$api_user_password.'&SIGNATURE='.$api_signature.'&METHOD=SetExpressCheckout&VERSION=204&PAYMENTREQUEST_0_AMT='.$amount.'&PAYMENTREQUEST_0_CURRENCYCODE=JPY&PAYMENTREQUEST_0_PAYMENTACTION=Sale&cancelUrl='.$cancel_url.'&returnUrl='.$return_url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api);
//$response = curl_exec($ch);

			// $response = 'TOKEN=EC%2d3CR64368FD850894A&TIMESTAMP=2016%2d09%2d26T16%3a22%3a13Z&CORRELATIONID=61edde8be3399&ACK=Success&VERSION=204&BUILD=253950221';
			preg_match('/ACK=(\w+)/', curl_exec($ch), $ack);

			// if($ack[1] === 'Success') {
			// 	preg_match('/EC-(\w+)/', $response, $token);
			// 	return redirect('https://www.sandbox.paypal.com/jp/cgi-bin/webscr?cmd=_express-checkout&token='.$token[0]);
			// } else {
			// 	echo 'failedfailedfailed';
			// }

	}
    
}
