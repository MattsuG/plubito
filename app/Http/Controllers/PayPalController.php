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

		if ((int)$app->pivot->approved_flag === 0 || (int)$app->pivot->paid_flag === 1) {
			return back();
			die();
		}

		$api_user_name     = 'noblun0405-facilitator_api1.gmail.com';
		$api_user_password = 'KJEQRZN9AHNRAUPA';
		$api_signature     = 'AFcWxV21C7fd0v3bYYYRCpSSRl31Arc06.wtJVP9xHKVOzDaz8OvKpVi';
		$return_url        = 'https://plubito.jp/payment/confirm';
		$cancel_url        = 'CANCELURL=https://plubito.jp/user/mypage';
		$tax_rate          = 8.00;
		$amount            = 3000 + 3000 * $tax_rate / 100; 

		//PayPal Express CheckoutAPIを実行
		$responce = file_get_contents('https://api-3t.sandbox.paypal.com/nvp?METHOD=SetExpressCheckout&VERSION=204&USER='.$api_user_name.'&PWD='.$api_user_password.'&SIGNATURE=&RETURNURL='.$return_url.'&CANCELURL='.$cancel_url.'&L_PAYMENTREQUEST_0_AMT0='.$talk->price.'.0&L_PAYMENTREQUEST_0_NAME0='.$talk->title.'&L_PAYMENTREQUEST_0_QTY0=1&L_PAYMENTREQUEST_0_TAXAMT0='.$tax_rate.'&L_PAYMENTREQUEST_0_ITEMCATEGORY0=Digital&PAYMENTREQUEST_0_PAYMENTACTION=Sale&PAYMENTREQUEST_0_CURRENCYCODE=JPY&PAYMENTREQUEST_0_AMT='.$amount.'.0&PAYMENTREQUEST_0_ITEMAMT='.$talk->price.'.0&REQCONFIRMSHIPPING=0&NOSHIPPING=1&SOLUTIONTYPE=Sole');

			var_dump($responce);
			
			preg_match('/ACK=(\w+)/', $responce, $ack);

			if($ack[1] === 'Success') {
				preg_match('/EC-(\w+)/', $responce, $token);
				echo $token[1];
			} else {
				echo $ack[1];
			}

	}
    
}
