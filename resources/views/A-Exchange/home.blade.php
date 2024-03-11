@extends('layout')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 col-md-12 align-items-start">
                <div class="col-md-10">
                    <div class="me-auto d-lg-block d-block">
                        <h2 class="text-black font-w600">Dashboard</h2>
                        <p class="mb-0">Hello {{$data->name}}, Welcome to Arman Exchange</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
                        <div class="widget-stat cardd">
                            <div class="card-body  pdng-bg">
                                <div class="media ai-icon">
                                        <svg id="SvgjsSvg1973" width="43" height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1975" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, -15)"><defs id="SvgjsDefs1974"><clipPath id="gridRectMaskfn8m3nal"><rect id="SvgjsRect1977" width="69" height="75" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskfn8m3nal"></clipPath><clipPath id="nonForecastMaskfn8m3nal"></clipPath><clipPath id="gridRectMarkerMaskfn8m3nal"><rect id="SvgjsRect1978" width="67" height="77" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1989" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer1990" result="SvgjsFeComponentTransfer1990Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR1991" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG1992" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB1993" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA1994" type="identity"></feFuncA></feComponentTransfer></filter></defs><g id="SvgjsG1979" class="apexcharts-radialbar"><g id="SvgjsG1980"><g id="SvgjsG1981" class="apexcharts-tracks"><g id="SvgjsG1982" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428" fill="none" fill-opacity="1" stroke="#a8aaae29" stroke-opacity="1" stroke-linecap="round" stroke-width="3.186568292682929" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"></path></g></g><g id="SvgjsG1984"><g id="SvgjsG1986" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1987" d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 19.52329268315146 22.798412788836565" fill="none" fill-opacity="0.85" stroke="rgba(168,170,174,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.285121951219514" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="306" data:value="85" selected="true" filter="url(#SvgjsFilter1989)" index="0" j="0" data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 19.52329268315146 22.798412788836565"></path></g><circle id="SvgjsCircle1985" r="8.210740243902439" cx="31.5" cy="31.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1995" x1="0" y1="0" x2="63" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1996" x1="0" y1="0" x2="63" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1976" class="apexcharts-annotations"></g></svg>
                                    <div class="media-body" style="margin-left: 17px;">
                                        <p class="mb-1">Owing Balance</p>
                                        <h4 class="mb-0">-11.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-success text-success">
                                    <i class="fa-solid fa-money-bill"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Transaction</p>
                                    <h4 class="mb-0"><a href="">Transactions</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-warning text-warning">
                                    <i class="fa fa-random i-red"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Create-Tranx</p>
                                    <h4 class="mb-0"><a href="">Create Transaction</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-success text-success">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">T-PIN</p>
                                    <h4 class="mb-0"><a href="">Generate T-PIN</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body  p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-danger text-danger">
                                    <i class="fa-solid fa-key"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Password</p>
                                    <h4 class="mb-0"><a href="">Change Password</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-7 col-xxl-7 col-md-7">
                            <div class="card">
                                <div class=" border-0 pb-0 bg-redd">
                                    <h3 class="fs-18 text-black cal-txt">Agent Transactions Status</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-sm-flex flex-wrap  justify-content-around" style="float:inline-end;">
                                        <div class="d-flex mb-4 align-items-center col-md-12 total-shd">
                                            <span class="rounded me-3 bg-primary p-3" style="height: 50px;">
                                                <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                            </span>
                                            <div>
                                                <p class="fs-14 mb-1">Total Transactions</p>
                                                <span class="fs-18 text-black font-w700" style="margin-left: 49px;">25</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin-top:17%;">
                                    <div class="col-md-12" style="margin-top:4% ;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-cancel p-3" style="height: 47px;">
                                                        <i class="fas fa-times color-danger" style=" color: red;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Cancelled</p>
                                                        <span class="fs-18 text-black font-w700">00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-Hold p-3" style="height: 50px;">
                                                        <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Compliance Held	</p>
                                                        <span class="fs-18 text-black font-w700">00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-ok p-3" style="height: 50px;">
                                                        <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Ready</p>
                                                        <span class="fs-18 text-black font-w700">25</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top:2% ;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-pending p-3" style="height: 47px;">
                                                        <i class="fa-regular fa-hourglass-half" style=" color: #00ab90;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Pending</p>
                                                        <span class="fs-18 text-black font-w700" style="margin-left: 49px;">25</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-incomplete p-3" style="height: 50px;">
                                                        <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Incomplete</p>
                                                        <span class="fs-18 text-black font-w700" style="margin-left: 49px;">25</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-inprocess  p-3" style="height: 50px;">
                                                        <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">In-process</p>
                                                        <span class="fs-18 text-black font-w700" style="margin-left: 49px;">25</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top:2% ;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-paid p-3" style="height: 50px;">
                                                        <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Paid</p>
                                                        <span class="fs-18 text-black font-w700">25</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex mb-4 align-items-center total-shd">
                                                    <span class="rounded me-3 status-cancelling p-3" style="height: 50px;">
                                                        <i class="flaticon-381-battery-6" style=" color: white;font-size: 20px;"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-14 mb-1">Cancelling</p>
                                                        <span class="fs-18 text-black font-w700">25</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-md-5">
                            <div class="send-money">
                                <div class="bg-blu">
                                    <h3 class="fs-18 cal-txt">Calculator</h3>
                                </div>
                                <form method="post" action="{{route('sendmoney', ['id' => $data->id])}}" class="cal-pd">
                                    @csrf
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group mt-4" style="width: 77vh;">
                                            <label>You Send</label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="text" name="sender_money"
                                                        class="form-control w-100" placeholder="100.00"
                                                        value="1000">
                                                </div>
                                                <div class="right-side col-md-4">
                                                    <label class="inputt-group-text input-group-text-count-flags"
                                                        for="country_from">
                                                        <img class="country_flag_icon" id="receiving_flag"
                                                            src="/images/United.png">
                                                    </label>
                                                    <select class="nice-select" name="sender_currency">
                                                        <option value="GBP">GBP</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group mt-4" style="width: 77vh;">
                                            <label>Get Recipients</label>
                                            <div class="row">
                                                <div class="col-md-8 col-lg-8 col-xl-8">
                                                    <input type="text" name="reciever_money"
                                                        class="form-control w-100" placeholder="1000.00"
                                                        value="250,00.00" readonly>
                                                </div>
                                                <div class="right-side col-md-4 col-xl-4 col-xl-4">
                                                    <label class="inputt-group-text input-group-text-count-flags"
                                                        for="country_from">
                                                        <img class="country_flag_icon" id="receiving_flag"
                                                            src="/images/pakistan.png">
                                                    </label>
                                                    <select class="nice-select" name="reciever_currency">
                                                        <option value="PKR">PKR</option>
                                                        {{-- <option value="GBP">GBP</option> --}}
                                                        <option value="AUS">AUS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-xl-4 col-xxl-6 col-md-6">
                                            <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                <input type="checkbox" class="form-check-input" checked=""
                                                    id="customCheckBox3">
                                                <label class="form-check-label"
                                                    for="customCheckBox3">Cash</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6">
                                            <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customCheckBox3">
                                                <label class="form-check-label"
                                                    for="customCheckBox3">Bank</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6">
                                            <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customCheckBox3">
                                                <label class="form-check-label"
                                                    for="customCheckBox3">Wallet</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <div class="mb-3 ">
                                            <label class="form-label">Payout Branches</label>
                                            <select class="nice-select  form-control wide w-100">
                                                <option>Select Payout Branches</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="calculation mt-3">
                                        <div class="row mt-1">
                                            <div class="col-xl-4 col-xxl-6 col-md-6">
                                                <label class="form-check-label" for="customCheckBox3">Today
                                                    Rates</label>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-md-6">
                                                <label class="form-check-label" for="customCheckBox3"
                                                    style="float: inline-end;">1 <span
                                                        class="spn-fnt">GBP</span>=352.15 <apan class="spn-fnt">
                                                        PKR</apan></label><br>
                                                <label class="form-check-label" for="customCheckBox3"
                                                    style="float: inline-end;">1 <span
                                                        class="spn-fnt">GBP</span>=1.8 <apan class="spn-fnt">AUS
                                                    </apan></label>
                                            </div><br>

                                            <div class="col-xl-4 col-xxl-6 col-md-6">
                                                <label class="form-check-label" for="customCheckBox3">Transfer
                                                    Fee</label>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-md-6">
                                                <label class="form-check-label" for="customCheckBox3"
                                                    style="float: inline-end;">GBP <span
                                                        class="spn-fnt">00.00</span></label>
                                            </div><br>
                                            <div class="col-xl-4 col-xxl-6 col-md-6">
                                                <label class="form-check-label" for="customCheckBox3">Payable
                                                    Amount</label>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-md-6">
                                                <label class="form-check-label" for="customCheckBox3"
                                                    style="float: inline-end;">GBP <span class="spn-fnt"
                                                        id="myspan"
                                                        name="reciever_money">102.99</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-area mt-40">
                                        <button class="cmn-btn w-100">Get Started</button>
                                        {{-- <input type="submit"> --}}
                                    </div>
                                </form>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        // Select the elements
                                        const senderCurrencySelect = document.querySelector('select[name="sender_currency"]');
                                        const receiverCurrencySelect = document.querySelector('select[name="reciever_currency"]');
                                        const senderMoneyInput = document.querySelector('input[name="sender_money"]');
                                        const receiverMoneyInput = document.querySelector('input[name="reciever_money"]');
                                        const mySpan = document.getElementById('myspan');

                                        // Conversion rates (assuming these values, you should use real-time rates)
                                        const conversionRates = {
                                            'GBP': {
                                                'PKR': 354.29,
                                                'AUS': 1.8
                                            },
                                            'AUS': {
                                                'GBP': 0.56,
                                                'PKR': 196.14
                                            },
                                            'PKR': {
                                                'GBP': 0.0028,
                                                'AUS': 0.0051
                                            }
                                        };

                                        // Function to update recipient money
                                        function updateRecipientMoney() {
                                            const senderCurrency = senderCurrencySelect.value;
                                            const receiverCurrency = receiverCurrencySelect.value;
                                            const senderMoney = parseFloat(senderMoneyInput.value);


                                            // Get the conversion rate
                                            let rate;
                                            if (conversionRates[senderCurrency] && conversionRates[senderCurrency][receiverCurrency]) {
                                                rate = conversionRates[senderCurrency][receiverCurrency];
                                            } else {
                                                // If the conversion rate is not found, try to reverse the currencies
                                                rate = 1 / conversionRates[receiverCurrency][senderCurrency];
                                            }

                                            if (!isNaN(senderMoney) && rate) {
                                                const receiverMoney = (senderMoney * rate).toFixed(2);
                                                receiverMoneyInput.value = receiverMoney;
                                            }
                                        }

                                        function updateMySpan() {
                                            const senderMoney = parseFloat(senderMoneyInput.value.replace(/[^0-9.]/g, ''));
                                            mySpan.textContent = senderMoney.toFixed(2);
                                        }

                                        // Listen for changes in the sender and recipient currency select as well as sender money input
                                        senderCurrencySelect.addEventListener('change', updateRecipientMoney);
                                        receiverCurrencySelect.addEventListener('change', updateRecipientMoney);
                                        senderMoneyInput.addEventListener('input', updateRecipientMoney);
                                        senderMoneyInput.addEventListener('input', updateMySpan);
                                        // Initial update
                                        updateRecipientMoney();
                                        updateMySpan();
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Transactions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width50">
                                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                        <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                        <label class="custom-control-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>Transaction #</th>
                                                <th>Name</th>
                                                <th>Beneficiary Name</th>
                                                <th>Beneficiary Phone</th>
                                                <th>Bank Name</th>
                                                <th>Account Number</th>
                                                <th>Amount</th>
                                                <th>BIC Code</th>
                                                <th>Relation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($transaction as $item)


                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                        <label class="custom-control-label" for="customCheckBox2"></label>
                                                    </div>
                                                </td>
                                                <td>{{$item->id}}</td>
                                                <td><div class="d-flex align-items-center"><img src="/images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt="/"> <span class="w-space-no"> Ehsan Ali</span></div></td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$item->bef_name}}</td>
                                                <td>{{$item->bef_phone}}</td>
                                                <td>{{$item->bef_account_name}}</td>
                                                <td>{{$item->bef_amount}}</td>
                                                <td>{{$item->bef_bic_code}}</td>
                                                <td>{{$item->bef_relation}}</td>
                                                <td><div class="d-flex align-items-center"><i class="fas fa-circle text-success me-1"></i> Paid</div></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
