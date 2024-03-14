<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function benstore(Request $request){
        $request->validate([
            'befname'=>'required',
            'befcountry'=>'required',
            'befacc'=>'required',
            'befbank'=>'required',
            'befbic'=>'required',
        ]);
        $data = $request;

        $user = new Beneficiary;
        $user->befname = $data->befname;
        $user->befemail = $data->befemail;
        $user->befphone = $data->befphone;
        $user->befacc = $data->befacc;
        $user->befbank = $data->befbank;
        $user->befbic = $data->befbic;
        $user->befcountry = $data->befcountry;
        $user->befamount = $data->befamount;
        $user->save();

        return view('Transaction.confirm', compact('data'));

    }

}
