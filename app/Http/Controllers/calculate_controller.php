<?php

namespace App\Http\Controllers;
use AmrShawky\LaravelCurrency\Facade\Currency;
use App\User;
use App\beneficiaries;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class calculate_controller extends Controller
{
    function index(){
        if(Auth::user()){
            return redirect('dashboard');
        }

        return view('login');

    }


    // function calculate( Request $request){
    //     dd($request['reciever_currency']);
    // }
    public function calculate(Request $request){
        $from = $request->sender_currency;
        $to = $request->reciever_currency;
        $amount= intval($request->sender_money);
        // dd($amount);

        $converted=Currency::convert()
            ->from($from)
            ->to($to)
            ->amount($amount)
            ->get();
        dd($converted);
        // return view('A-Exchange.home',compact('converted'));
    }

    public function signup(){
        return view('signup');
    }

    public function login(){
        return view('login');
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');

    }

    public function logincheck(Request $request){
        // dd($request);
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $userdetail = $request->only('email', 'password');

        if(Auth::attempt($userdetail)){
            $user = Auth::user();
            return redirect()->route('dashboard', ['id' => $user->id]);
        }
        else{
            return ('Wrong Password');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }

    public function dashboard($id){
        $data = User::find($id);
        $transaction = beneficiaries::all();
        return view('A-Exchange.home', compact('data', 'transaction'));
        // return view('A-Exchange.home');

    }
    public function customers($id){
        $customer = User::all();
        $data = User::find($id);
        return view('customer.customer', compact('customer', 'data'));
    }



    public function sendmoney(Request $request, $id){
        $data = User::find($id);
        $money = $request->validate([
            'sender_money' => 'required|numeric|min:0.01'
        ]);
        return view('Transaction.send_money', compact('data'))->with('money', $money);
    }

    public function amount_store(Request $request, $id, $amount){
         //dd('hello');

       $request->validate([
            'bef_name' =>'required',
            'bef_bic_code'=>'required',
            'bef_phone'=>'required',
            'bef_relation'=>'required',
            'bef_account_name' =>'required',
            'bef_account_number'=>'required'
        ]);
        // dd('hello');
        $beneficiaries = new beneficiaries;
        $beneficiaries->bef_name = $request->bef_name;
        $beneficiaries->bef_bic_code = $request->bef_bic_code;
        $beneficiaries->bef_phone = $request->bef_phone;
        $beneficiaries->bef_relation = $request->bef_relation;
        $beneficiaries->bef_account_name = $request->bef_account_name;
        $beneficiaries->bef_account_number = $request->bef_account_number;
        $beneficiaries->bef_amount =$amount;
      // dd($beneficiaries);
        $beneficiaries->save();

        return redirect('/dashboard/'.$id);
    }
    public function bendetail($id){
        $data = User::find($id);
        //$amount = amount::all();
        //$bene = beneficiaries::all();
        return view('Transaction.Beneficiary', compact('data'));
    }
    public function delete(User $user_id){
        $user_id->delete();

        return redirect()->back();
    }


}

