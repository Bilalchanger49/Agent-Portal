<?php

namespace App\Http\Controllers;
use AmrShawky\LaravelCurrency\Facade\Currency;
use App\User;
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
        return view('A-Exchange.home', compact('data'));
        // return view('A-Exchange.home');
    }
}

