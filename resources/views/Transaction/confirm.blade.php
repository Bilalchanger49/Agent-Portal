@extends('header')

@section('content')
    <div class="container">
        <div class="bg_clr" style="border-bottom: 1px solid #bbbbbb;padding: 20px;">
            <div>
                <h3>Payment Information</h3>
            </div>
        </div>
        <div class="bg_clr" style="padding: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Sending Amount</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befamount}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Transfer Fee</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">Free</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Total Payable Amount</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befamount}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Receiving Amount</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befamount * 354}}PKR</p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                        <p style="text-align: end; color: gray;">Exchange Rate</p>
                    </div>
                    <div class="col-md-7">
                        <p style="color:gray;">1 GBP =354.00 PKR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="bg_clr mt-3" style="border-bottom: 1px solid #bbbbbb;padding: 20px;">
            <div>
                <h3>Recipient Information</h3>
            </div>
        </div>
        <div class="bg_clr" style="padding: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Recipient Name</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befname}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Phone Number</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befphone}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Bank Name</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befbank}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Acount Number</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befacc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <p style="text-align: end; color: gray;">Bank BIC Code</p>
                        </div>
                        <div class="col-md-7">
                            <p style="color:gray;">{{$data->befbic}}</p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                        <p style="text-align: end; color: gray;">Recipient Email</p>
                    </div>
                    <div class="col-md-7">
                        <p style="color:gray;">{{$data->befemail}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary">Confirm</button>

@endsection
