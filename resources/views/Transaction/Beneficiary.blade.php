@extends('layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <h2>Enter Beneficiary Details</h2>

        <form action="{{ route('benstore') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Beneficiary Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" Name='befname'>
            </div>

            <div class="form-group">
                <label>Beneficiary country</label>
                <input type="text" class="form-control" placeholder="Enter Country" name='befcountry'>
            </div>

            <div class="form-group">
                <label>Beneficiary Phone</label>
                <input type="number" class="form-control" placeholder="Enter Phone" name='befphone'>
            </div>

            <div class="form-group">
                <label>Beneficiary Bank Name</label>
                <input type="text" class="form-control" placeholder="Enter Bank Name" name='befbank'>
            </div>

            <div class="form-group">
                <label>Beneficiary Account Number</label>
                <input type="number" class="form-control" placeholder="Enter Account Number" name='befacc'>
            </div>

            <div class="form-group">
                <label>Beneficiary BIC Code</label>
                <input type="number" class="form-control" placeholder="Enter BIC Code" name='befbic'>
            </div>

            <div class="form-group">
                <label>Beneficiary Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name='befemail'>
            </div>

            <div class="form-group">
                <label>Total Amount</label>
                <input type="text" class="form-control" placeholder="Enter Amount" name='befamount'
                    value="{{ session('amount') }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection
