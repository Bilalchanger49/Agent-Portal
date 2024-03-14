@extends('layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <h2>Edit Beneficiary Details</h2>
        {{-- @dd($user['id']) --}}
        <form action="{{ route('transeditstore', ['id' => $user['id'], 'tranid' => $data['id']]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Beneficiary Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" Name='befname' value="{{$data->bef_name}}">
            </div>

            <div class="form-group">
                <label>Beneficiary Phone</label>
                <input type="number" class="form-control" placeholder="Enter Phone" name='befphone' value="{{$data->bef_phone}}">
            </div>

            <div class="form-group">
                <label>Beneficiary Bank Name</label>
                <input type="text" class="form-control" placeholder="Enter Bank Name" name='befbank' value="{{$data->bef_account_name}}">
            </div>

            <div class="form-group">
                <label>Beneficiary Account Number</label>
                <input type="number" class="form-control" placeholder="Enter Account Number" name='befacc' value="{{$data->bef_account_number}}">
            </div>

            <div class="form-group">
                <label>Beneficiary BIC Code</label>
                <input type="number" class="form-control" placeholder="Enter BIC Code" name='befbic' value="{{$data->bef_bic_code}}">
            </div>

            <div class="form-group">
                <label>Total Amount</label>
                <input type="text" class="form-control" placeholder="Enter Amount" name='befamount'
                value="{{$data->bef_amount}}">
            </div>

            <div class="form-group">
                <label>Action</label>
                <select name="action" style=" width: 100%; height: 38px; border: 1px solid #d7cbcb; border-radius: 5px;">
                    <option>Pending</option>
                    <option>Cancelled</option>
                    <option>Completed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection

