<!DOCTYPE html>
<html>

<!-- Mirrored from omah.w3itexpert.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 12:20:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="DexignZone">
<meta name="robots" content="index, follow">

<meta name="keywords" content="admin, dashboard, admin dashboard, admin template, template, admin panel, administration, analytics, bootstrap, hospital admin, modern, property, real estate, responsive, creative, retina ready, modern Dashboard">
<meta name="description" content="Your Ultimate Real Estate Admin Dashboard ASP.NET Core MVC Template. Streamline property management, analyze market trends, and boost productivity with our intuitive and feature-rich solution. Elevate your real estate business today!">

<meta property="og:title" content="Omah - Real Estate Admin Dashboard ASP.NET Core MVC Template">
<meta property="og:description" content="Your Ultimate Real Estate Admin Dashboard ASP.NET Core MVC Template. Streamline property management, analyze market trends, and boost productivity with our intuitive and feature-rich solution. Elevate your real estate business today!">
<meta property="og:image" content="../products.w3itexpert.com/images/omah_ogimage.png">
<meta name="format-detection" content="telephone=no">

<meta name="twitter:title" content="Omah - Real Estate Admin Dashboard ASP.NET Core MVC Template">
<meta name="twitter:description" content="Your Ultimate Real Estate Admin Dashboard ASP.NET Core MVC Template. Streamline property management, analyze market trends, and boost productivity with our intuitive and feature-rich solution. Elevate your real estate business today!">
<meta name="twitter:image" content="../products.w3itexpert.com/images/omah_ogimage.png">
<meta name="twitter:card" content="summary_large_image">

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arman Exchange</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}">

    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <!--**********************************
        Style script start
    ***********************************-->

	<link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">

    <!--**********************************
        Style script end
    ***********************************-->
    <!-- Style css -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <style type="text/css">
        .send-money {
            border-radius: 10px;
            background-color: white;
            box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
        }
        .currency-area {
            /*background-color: #edefff;*/
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 25px;
        }
        .right-side .nice-select {
            border-radius: 0px 6px 6px 0px !important;
            border: 1px solid #ededed;
            background-color: #f3f3f3 !important;
            padding: 11px 9px 14px 58px !important;
            display: flex !important;
            /* align-items: center !important; */
            /* width: 126%; */
            /* float: inline-end; */
            margin-top: -48px;
            height: 48px;
            font-size: 15px;
            margin-left: -30px;
        }
        .form-control {
            padding: 0.375rem 0.875rem;
            background-color: #FAFBFE;
            background-clip: padding-box;
            border: 1px solid #DBE5EE;
            border-radius: 6px 0px 0px 6px;
            box-shadow: inset 0 1px 2px 0 rgba(66, 71, 112, 0.12);
            width: 100% !important;
            height: 46px;
        }
        .iti-flag {
            height: 13px;
            background-image: url();
            background-repeat:no-repeat;
        }
        .form-tab .form-field label {
            background-color: transparent;
            border-bottom: none;
            border-left: none;
            border-top: none;
            color: #2f2f35;
            margin-bottom: 0;
            padding: 7px 15px;
            border-right: 1px solid #dadada;
        }
        .inputt-group-text {
            background: #f3f3f3;
            padding: 3px 37px 12px 12px;
            border-radius: 0.75rem;
            width: 10%;
            /* margin-left: 397px; */
            margin-top: 7px;
            border-radius: 0px;
            margin-left: -30px;
        }
        .iti-flag1 {
            height: 13px;
            background-image: url(images/pakistan.png);
            background-repeat:no-repeat;
        }
        .spn-fnt {
            font-size: 15px;
            color: black;
            font-weight: 600;
        }
        .mdr {
            font-size: 13px;
            line-height: 23px;
        }
        .left-side input {
            padding: 4px;
            background-color: transparent;
            border: none;
            font-weight: 600;
            font-size: 15px;
        }

        .cmn-btn {
            padding: 10px 30px;
            font-weight: 600;
            text-align: center;
            background-color: #0c266c;
            color: var(--bs-white);
            transition: 0.3s;
            border-radius: 10px;
            border: 1px solid transparent;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }
        .w-100 {
            width: 100%!important;
        }
        .cmn-btn:hover {
            background: transparent;
            border: 1px solid #0c266c;
            color: #0c266c;
        }
        .bg-blu {
            background-image: linear-gradient(#0E325A, #1C64B4);
            padding: 7px;
            border-radius: 7px 7px 17px 17px;
            margin-top: -7px;
            height: 50px;
        }
        .bg-redd {
            /*background: #334288 !important;*/
            background-image: linear-gradient(#e22122, #ff6e6a);
            padding: 7px;
            border-radius: 7px 7px 17px 17px !important;
            margin-top: -7px;
            height: 50px;
        }
        .cal-txt {
            color: white !important;
            margin-top: 5px;
            text-align: center;
        }
        .calculation {
            background: #bdcfff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 43px;
        }
        .cal-pd {
            padding: 20px;
        }
        .total-shd {
            background: white;
            padding: 13px;
            border-radius: 7px;
            box-shadow: 0px 0px 5px 0px #cdcdcd;
        }
        .status-cancel {background-color: #ffcccb;}
        .status-Hold {background-color: #fad690;}
        .status-ok {background-color: #50c51e73;}
        .status-pending {background-color: #00f6d075;}
        .status-incomplete {background-color: #edb8f6;}
        .status-inprocess {background-color: #e7f695;}
        .status-paid {background-color: #0972c354;}
        .status-cancelling {background-color: #c76b0069;}
    </style>
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->

        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="/images/logo.png" alt="/">
                <img class="brand-title" src="/images/logo-text.png" alt="/">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" /><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" /></g></svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="5" cy="12" r="2" /><circle fill="#000000" cx="12" cy="12" r="2" /><circle fill="#000000" cx="19" cy="12" r="2" /></g></svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="/images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24" /><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" /><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " /></g></svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="5" cy="12" r="2" /><circle fill="#000000" cx="12" cy="12" r="2" /><circle fill="#000000" cx="19" cy="12" r="2" /></g></svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fas fa-user-circle text-primary me-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fas fa-users text-primary me-2"></i> Add to close friends</li>
                                        <li class="dropdown-item"><i class="fas fa-plus text-primary me-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fas fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="5" cy="12" r="2" /><circle fill="#000000" cx="12" cy="12" r="2" /><circle fill="#000000" cx="19" cy="12" r="2" /></g></svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" /><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" /></g></svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU<i class="icon fas fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO<i class="icon fas fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" /><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" /></g></svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24" /><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" /><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" /></g></svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <div class="search_bar dropdown">
                                    <div class="dropdown-menu p-0 m-0">
                                        <form>
                                            <div class="input-group search-area d-xl-inline-flex d-none">
                                                <input class="form-control" type="text" placeholder="Search Here" aria-label="Search">
                                                <button class="input-group-text">
                                                    <span class="search_icon p-3 c-pointer">
                                                        <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#3B4CB8" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3B4CB8" />
                                    </svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fas fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0);">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.4604 3.84888H5.31685C4.64745 3.84961 4.00568 4.11586 3.53234 4.58919C3.059 5.06253 2.79276 5.7043 2.79202 6.3737V18.1562C2.79276 18.8256 3.059 19.4674 3.53234 19.9407C4.00568 20.4141 4.64745 20.6803 5.31685 20.6811C5.54002 20.6812 5.75401 20.7699 5.91181 20.9277C6.06961 21.0855 6.15832 21.2995 6.15846 21.5227V23.3168C6.15846 23.6215 6.24115 23.9204 6.39771 24.1818C6.55427 24.4431 6.77882 24.6571 7.04744 24.8009C7.31605 24.9446 7.61864 25.0128 7.92295 24.9981C8.22726 24.9834 8.52186 24.8863 8.77536 24.7173L14.6173 20.8224C14.7554 20.7299 14.9179 20.6807 15.0841 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.472 19.3664 21.6222 18.8359L24.8965 7.05011C24.9999 6.67481 25.0152 6.28074 24.9413 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.9309 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4604 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0841C14.5856 18.9972 14.0981 19.1448 13.6836 19.4219L7.84168 23.3168V21.5227C7.84094 20.8533 7.5747 20.2115 7.10136 19.7382C6.62802 19.2648 5.98625 18.9986 5.31685 18.9978C5.09368 18.9977 4.87969 18.909 4.72189 18.7512C4.56409 18.5934 4.47537 18.3794 4.47524 18.1562V6.3737C4.47537 6.15054 4.56409 5.93655 4.72189 5.77874C4.87969 5.62094 5.09368 5.53223 5.31685 5.5321H22.4604C22.5905 5.53243 22.7188 5.56277 22.8352 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2641 6.09045 23.2887 6.21821C23.3132 6.34597 23.3079 6.47766 23.2733 6.60304Z" fill="#3B4CB8" />
                                        <path d="M7.84167 11.4233H12.0497C12.2729 11.4233 12.487 11.3347 12.6448 11.1768C12.8027 11.019 12.8913 10.8049 12.8913 10.5817C12.8913 10.3585 12.8027 10.1444 12.6448 9.98661C12.487 9.82878 12.2729 9.74011 12.0497 9.74011H7.84167C7.61846 9.74011 7.4044 9.82878 7.24656 9.98661C7.08873 10.1444 7.00006 10.3585 7.00006 10.5817C7.00006 10.8049 7.08873 11.019 7.24656 11.1768C7.4044 11.3347 7.61846 11.4233 7.84167 11.4233Z" fill="#3B4CB8" />
                                        <path d="M15.4162 13.1066H7.84167C7.61846 13.1066 7.4044 13.1952 7.24656 13.3531C7.08873 13.5109 7.00006 13.725 7.00006 13.9482C7.00006 14.1714 7.08873 14.3855 7.24656 14.5433C7.4044 14.7011 7.61846 14.7898 7.84167 14.7898H15.4162C15.6394 14.7898 15.8534 14.7011 16.0113 14.5433C16.1691 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1691 13.5109 16.0113 13.3531C15.8534 13.1952 15.6394 13.1066 15.4162 13.1066Z" fill="#3B4CB8" />
                                    </svg>
                                    <div class="pulse-css"></div>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0);">
                                    <i class="flaticon-381-calendar-2"></i>
                                    <!-- <div class="pulse-css"></div> -->
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="PageLogin.html" class="dropdown-item ai-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3B4CB8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                </a>
                                    <!-- <div class="pulse-css"></div> -->
                                </a>
                                <!-- <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>10 minutes ago</span>
                                                    <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                    <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>30 minutes ago</span>
                                                    <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>15 minutes ago</span>
                                                    <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge dark">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        <span class="text-black">{{$data->name}}</span>
                                        <p class="fs-12 mb-0">Money Transfer</p>
                                    </div>
                                    <img src="/images/profile/profile.png" width="20" alt="/">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="EmailInbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow ai-icon" href="/dashboard/{{$data->id}}" aria-expanded="false">
                            <i class="flaticon-dashboard-1"></i>
                            <span class="nav-text">Home</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="Omah/Analytics.html">Analytics</a></li>
                            <li><a href="Omah/Review.html">Review</a></li>
                            <li><a href="Omah/OrderList.html">Order List</a></li>
                            <li><a href="Omah/CustomerList.html">Customer</a></li>

                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="/customers/{{$data->id}}" aria-expanded="false">
                            <i class="flaticon-381-user-7"></i>
                            <span class="nav-text">Customers</span>
                            <!-- <span class="badge badge-sm badge-danger ms-3">New</span> -->
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AddAgent.html">Add Agent</a></li>
                            <li><a href="Omah/AddAgentWizard.html">Add Agent Wizard</a></li>
                            <li><a href="Omah/AllAgents.html">All Agents</a></li>
                            <li><a href="Omah/AgentProfile.html">Agent Profile</a></li>

                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                            <i class="flaticon-381-earth-globe"></i>
                            <span class="nav-text">Exchange Rates</span>
                            <!-- <span class="badge badge-sm badge-danger ms-3">New</span> -->
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AddProperty.html">Add Property</a></li>
                            <li><a href="Omah/PropertyList.html">Property List</a></li>
                            <li><a href="Omah/PropertyDetails.html">Property Details</a></li>

                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-briefcase"></i>
                            <span class="nav-text">Transactions</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-app"></i>
                            <span class="nav-text">Ledger</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-cloud"></i>
                            <span class="nav-text">Transaction Summary</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-calendar"></i>
                            <span class="nav-text">Export Report</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-app"></i>
                            <span class="nav-text">Comission Report</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-app"></i>
                            <span class="nav-text">Customer Limit Report</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                            <span class="nav-text">Deposits</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-wallet"></i>
                            <span class="nav-text">Cashiers</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="Omah/AppProfile.html">Profile</a></li>
                            <li><a href="Omah/PostDetails.html">Post Details</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EmailCompose.html">Compose</a></li>
                                    <li><a href="Omah/EmailInbox.html">Inbox</a></li>
                                    <li><a href="Omah/EmailRead.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/AppCalender.html">Calendar</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/EcomProductGrid.html">Product Grid</a></li>
                                    <li><a href="Omah/EcomProductList.html">Product List</a></li>
                                    <li><a href="Omah/EcomProductDetail.html">Product Details</a></li>
                                    <li><a href="Omah/EcomProductOrder.html">Order</a></li>
                                    <li><a href="Omah/EcomCheckout.html">Checkout</a></li>
                                    <li><a href="Omah/EcomInvoice.html">Invoice</a></li>
                                    <li><a href="Omah/EcomCustomers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                <!--  <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-file"></i>
                            <span class="nav-text">Icons</span>
                            <span class="badge badge-sm badge-danger ms-3">New</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/FlatIcons.html">Flaticons</a></li>
                            <li><a href="Omah/SvgIcons.html">SVG Icons</a></li>

                        </ul>
                    </li> -->

                    <!-- <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-database-1"></i>
                            <span class="nav-text">CMS</span>
                            <span class="badge badge-sm badge-danger ms-3">New</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/Content.html">Content</a></li>
                            <li><a href="Omah/ContentAdd.html">Add Content</a></li>
                            <li><a href="Omah/Menu.html">Menus</a></li>
                            <li><a href="Omah/EmailTemplate.html">Email Template</a></li>
                            <li><a href="Omah/AddEmail.html">Add Email</a></li>
                            <li><a href="Omah/Blog.html">Blog</a></li>
                            <li><a href="Omah/AddBlog.html">Add Blog</a></li>
                            <li><a href="Omah/BlogCategory.html">Blog Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-bar-chart-2"></i>
                            <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/ChartFlot.html">Flot</a></li>
                            <li><a href="Omah/ChartMorris.html">Morris</a></li>
                            <li><a href="Omah/ChartChartjs.html">Chartjs</a></li>
                            <li><a href="Omah/ChartChartist.html">Chartist</a></li>
                            <li><a href="Omah/ChartSparkline.html">Sparkline</a></li>
                            <li><a href="Omah/ChartPeity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-money"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/Accordion.html">Accordion</a></li>
                            <li><a href="Omah/Alert.html">Alert</a></li>
                            <li><a href="Omah/Badge.html">Badge</a></li>
                            <li><a href="Omah/Button.html">Button</a></li>
                            <li><a href="Omah/Modal.html">Modal</a></li>
                            <li><a href="Omah/ButtonGroup.html">Button Group</a></li>
                            <li><a href="Omah/ListGroup.html">List Group</a></li>
                            <li><a href="Omah/MediaObject.html">Media Object</a></li>
                            <li><a href="Omah/Card.html">Cards</a></li>
                            <li><a href="Omah/Carousel.html">Carousel</a></li>
                            <li><a href="Omah/Dropdown.html">Dropdown</a></li>
                            <li><a href="Omah/Popover.html">Popover</a></li>
                            <li><a href="Omah/Progressbar.html">Progressbar</a></li>
                            <li><a href="Omah/Tab.html">Tab</a></li>
                            <li><a href="Omah/Typography.html">Typography</a></li>
                            <li><a href="Omah/Pagination.html">Pagination</a></li>
                            <li><a href="Omah/Grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-plugin"></i>
                            <span class="nav-text">Plugins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/Select2.html">Select 2</a></li>
                            <li><a href="Omah/Nestable.html">Nestedable</a></li>
                            <li><a href="Omah/NouiSlider.html">Noui Slider</a></li>
                            <li><a href="Omah/SweetAlert.html">Sweet Alert</a></li>
                            <li><a href="Omah/Toastr.html">Toastr</a></li>
                            <li><a href="Omah/MapJqvmap.html">Jqv Map</a></li>
                            <li><a href="Omah/LightGallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="Omah/WidgetBasic.html" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-settings"></i>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-form-1"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/FormElement.html">Form Elements</a></li>
                            <li><a href="Omah/FormWizard.html">Wizard</a></li>
                            <li><a href="Omah/FormCkeditor.html">CkEditor</a></li>
                            <li><a href="Omah/FormPickers.html">Pickers</a></li>
                            <li><a href="Omah/FormValidationJquery.html">Jquery Validate</a></li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-table"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/TableBootstrapBasic.html">Bootstrap</a></li>
                            <li><a href="Omah/TableDataTableBasic.html">Datatable</a></li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-landing-page"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Omah/PageRegister.html">Register</a></li>
                            <li><a href="Omah/PageLogin.html">Login</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="Omah/PageError400.html">Error 400</a></li>
                                    <li><a href="Omah/PageError403.html">Error 403</a></li>
                                    <li><a href="Omah/PageError404.html">Error 404</a></li>
                                    <li><a href="Omah/PageError500.html">Error 500</a></li>
                                    <li><a href="Omah/PageError503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="Omah/PageLockScreen.html">Lock Screen</a></li>
                        </ul>
                    </li> -->
                </ul>

                <!-- <div class="copyright">
                    <p><strong>Omah Dashboard</strong> © 2024 All Rights Reserved</p>
                    <p>by DexignZone</p>
                </div> -->
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


      <div class="">
            @yield('content')
      </div>


        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Arman Exchange</a> 2024</p>
            </div>
        </div>

        <!--**********************************
            Footer end
        ***********************************-->

    </div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js')}}"></script>

	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{ asset('vendor/chartjs/chart.bundle.min.js')}}"></script>
	<script src="{{ asset('vendor/owl-carousel/owl.carousel.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js')}}"></script>
	<!-- Vectormap -->
	<script src="{{ asset('vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
	<script src="{{ asset('vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
	<script src="{{ asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>

	<!-- Chart piety plugin files -->
	<script src="{{ asset('vendor/peity/jquery.peity.min.js')}}"></script>


	<script src="{{ asset('js/dashboard/dashboard-1.js')}}"></script>
	<script src="{{ asset('js/custom.min.js')}}"></script>
	<script src="{{ asset('js/deznav-init.js')}}"></script>
	<!-- Dashboard 1 -->

	<script>
		function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 0,
				nav: true,
				dots: false,
				navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
				responsive: {
					0: {
						items: 1
					},

					480: {
						items: 1
					},

					767: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			})
			/*Custom Navigation work*/
			jQuery('#next-slide').on('click', function () {
				$('.testimonial-one').trigger('next.owl.carousel');
			});

			jQuery('#prev-slide').on('click', function () {
				$('.testimonial-one').trigger('prev.owl.carousel');
			});
			/*Custom Navigation work*/
		}

		jQuery(window).on('load', function () {
			setTimeout(function () {
				carouselReview();
			}, 1000);
		});
	</script>

</body>

<!-- Mirrored from omah.w3itexpert.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 12:21:20 GMT -->
</html>
