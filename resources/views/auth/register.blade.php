<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Nexum Coins</title>
    <link rel="stylesheet" type="text/css" href="public/frontend/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="public/frontend/css/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="public/frontend/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <!-- <link rel="manifest" href="_manifest.html"> -->
    <meta id="theme-check" name="theme-color" content="#FFFFFF" />
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.html" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- ============== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
	<!-- <script src="scripts/bootstrap.min.html"></script> -->
    <script src="public/frontend/js/custom.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<style>
        .card-style {
            /* overflow: hidden; */
            border-radius: 22px;
            margin: 0 5px 12px;
            border: none;
            box-shadow: rgb(0 0 0 / 3%) 0 20px 25px -5px, rgb(0 0 0 / 2%) 0 10px 10px -5px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        
        .nav-tabs .nav-link {
            margin-bottom: -1px;
            background: 0 0;
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
            font-size: 20px;
        }
        .invalid-feedback {
    display: block;
    width: 100%;
    margin-top: 0.25rem;
    font-size: .875em;
    color: #dc3545;
}
body{
    height: 100%;max-height: unset;background: url('public/frontend/images/1267580.jpg');
}
.form-custom>span{color:black; font-weight:600;}
.text-center>a>span{ color: black; font-weight: 600; background: green; padding: 10px; color: white; border-radius: 10px;}

    </style>
</head>

<body class="theme-light" style=" height: 100%; max-height: unset; background: url('public/frontend/images/1267580.jpg');">
   

    <div id="page">
        <div class="page-content footer-clear">
            <div class="card-center mt-5 mx-3 px-4 py-4  rounded-m" style="background:white">
                <img src="public/frontend/images/nxm_logo.svg" style="border-radius: 13px;width:130px" />
                <h1 class="font-10 font-800 mb-0">Nexum Coin</h1>
					@if(Session::has('message'))
						<div class="alert alert-success">{{Session::get('message')}}</div>
					@endif
					@if(Session::has('notmessage'))
						<div class="alert alert-danger">{{Session::get('notmessage')}}</div>
					@endif
                <form action="{{ route('register') }}" method="POST">
					@csrf

					<div class="row"> 
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-person-circle font-13"></i>
                            <input type="text" class="form-control" id="sponsor_id" value="{{old('sponsor_id')}}"  name="sponsor_id" placeholder="Enter Sponser Code">
                            <label for="sponsorcode"  class="color-theme">Sponsor Code</label>
                            <!-- <span>(required)</span> -->
							<!-- <span id="spon_msg"></span>
							@error('sponsor_id')
								<br>
								<span class="text-danger">{{$message}}</span>
							@enderror -->
                        </div>
						
                    </div>
					<div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-person-circle font-13"></i>
                            <input type="text" required  class="form-control rounded-xs " id="name" name="name" :value="old('name')" placeholder="Enter Name">
                            <label for="name" :value="__('Name')" class="color-theme">Name</label>
                            <span>(required)</span>
                        </div>
                    </div>
					<div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-person-circle font-13"></i>
                            <input type="email" required  class="form-control rounded-xs " id="email" name="email" :value="old('email')" placeholder="Enter Email">
                            <label for="email" :value="__('Email')" class="color-theme">Email</label>
                            <span>(required)</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent" style="display: flex;">
							<!-- <select name="countryCode" id="" style="width: 104px;border: 1px solid black;">
								<option data-countrycode="GB" value="44" selected="">UK (+44)</option>
								<option data-countrycode="US" value="1">USA (+1)</option>
								<optgroup label="Other countries">
									<option data-countrycode="DZ" value="213">Algeria (+213)</option>
									<option data-countrycode="AD" value="376">Andorra (+376)</option>
									<option data-countrycode="AO" value="244">Angola (+244)</option>
									<option data-countrycode="AI" value="1264">Anguilla (+1264)</option>
									<option data-countrycode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
									<option data-countrycode="AR" value="54">Argentina (+54)</option>
									<option data-countrycode="AM" value="374">Armenia (+374)</option>
									<option data-countrycode="AW" value="297">Aruba (+297)</option>
									<option data-countrycode="AU" value="61">Australia (+61)</option>
									<option data-countrycode="AT" value="43">Austria (+43)</option>
									<option data-countrycode="AZ" value="994">Azerbaijan (+994)</option>
									<option data-countrycode="BS" value="1242">Bahamas (+1242)</option>
									<option data-countrycode="BH" value="973">Bahrain (+973)</option>
									<option data-countrycode="BD" value="880">Bangladesh (+880)</option>
									<option data-countrycode="BB" value="1246">Barbados (+1246)</option>
									<option data-countrycode="BY" value="375">Belarus (+375)</option>
									<option data-countrycode="BE" value="32">Belgium (+32)</option>
									<option data-countrycode="BZ" value="501">Belize (+501)</option>
									<option data-countrycode="BJ" value="229">Benin (+229)</option>
									<option data-countrycode="BM" value="1441">Bermuda (+1441)</option>
									<option data-countrycode="BT" value="975">Bhutan (+975)</option>
									<option data-countrycode="BO" value="591">Bolivia (+591)</option>
									<option data-countrycode="BA" value="387">Bosnia Herzegovina (+387)</option>
									<option data-countrycode="BW" value="267">Botswana (+267)</option>
									<option data-countrycode="BR" value="55">Brazil (+55)</option>
									<option data-countrycode="BN" value="673">Brunei (+673)</option>
									<option data-countrycode="BG" value="359">Bulgaria (+359)</option>
									<option data-countrycode="BF" value="226">Burkina Faso (+226)</option>
									<option data-countrycode="BI" value="257">Burundi (+257)</option>
									<option data-countrycode="KH" value="855">Cambodia (+855)</option>
									<option data-countrycode="CM" value="237">Cameroon (+237)</option>
									<option data-countrycode="CA" value="1">Canada (+1)</option>
									<option data-countrycode="CV" value="238">Cape Verde Islands (+238)</option>
									<option data-countrycode="KY" value="1345">Cayman Islands (+1345)</option>
									<option data-countrycode="CF" value="236">Central African Republic (+236)</option>
									<option data-countrycode="CL" value="56">Chile (+56)</option>
									<option data-countrycode="CN" value="86">China (+86)</option>
									<option data-countrycode="CO" value="57">Colombia (+57)</option>
									<option data-countrycode="KM" value="269">Comoros (+269)</option>
									<option data-countrycode="CG" value="242">Congo (+242)</option>
									<option data-countrycode="CK" value="682">Cook Islands (+682)</option>
									<option data-countrycode="CR" value="506">Costa Rica (+506)</option>
									<option data-countrycode="HR" value="385">Croatia (+385)</option>
									<option data-countrycode="CU" value="53">Cuba (+53)</option>
									<option data-countrycode="CY" value="90392">Cyprus North (+90392)</option>
									<option data-countrycode="CY" value="357">Cyprus South (+357)</option>
									<option data-countrycode="CZ" value="42">Czech Republic (+42)</option>
									<option data-countrycode="DK" value="45">Denmark (+45)</option>
									<option data-countrycode="DJ" value="253">Djibouti (+253)</option>
									<option data-countrycode="DM" value="1809">Dominica (+1809)</option>
									<option data-countrycode="DO" value="1809">Dominican Republic (+1809)</option>
									<option data-countrycode="EC" value="593">Ecuador (+593)</option>
									<option data-countrycode="EG" value="20">Egypt (+20)</option>
									<option data-countrycode="SV" value="503">El Salvador (+503)</option>
									<option data-countrycode="GQ" value="240">Equatorial Guinea (+240)</option>
									<option data-countrycode="ER" value="291">Eritrea (+291)</option>
									<option data-countrycode="EE" value="372">Estonia (+372)</option>
									<option data-countrycode="ET" value="251">Ethiopia (+251)</option>
									<option data-countrycode="FK" value="500">Falkland Islands (+500)</option>
									<option data-countrycode="FO" value="298">Faroe Islands (+298)</option>
									<option data-countrycode="FJ" value="679">Fiji (+679)</option>
									<option data-countrycode="FI" value="358">Finland (+358)</option>
									<option data-countrycode="FR" value="33">France (+33)</option>
									<option data-countrycode="GF" value="594">French Guiana (+594)</option>
									<option data-countrycode="PF" value="689">French Polynesia (+689)</option>
									<option data-countrycode="GA" value="241">Gabon (+241)</option>
									<option data-countrycode="GM" value="220">Gambia (+220)</option>
									<option data-countrycode="GE" value="7880">Georgia (+7880)</option>
									<option data-countrycode="DE" value="49">Germany (+49)</option>
									<option data-countrycode="GH" value="233">Ghana (+233)</option>
									<option data-countrycode="GI" value="350">Gibraltar (+350)</option>
									<option data-countrycode="GR" value="30">Greece (+30)</option>
									<option data-countrycode="GL" value="299">Greenland (+299)</option>
									<option data-countrycode="GD" value="1473">Grenada (+1473)</option>
									<option data-countrycode="GP" value="590">Guadeloupe (+590)</option>
									<option data-countrycode="GU" value="671">Guam (+671)</option>
									<option data-countrycode="GT" value="502">Guatemala (+502)</option>
									<option data-countrycode="GN" value="224">Guinea (+224)</option>
									<option data-countrycode="GW" value="245">Guinea - Bissau (+245)</option>
									<option data-countrycode="GY" value="592">Guyana (+592)</option>
									<option data-countrycode="HT" value="509">Haiti (+509)</option>
									<option data-countrycode="HN" value="504">Honduras (+504)</option>
									<option data-countrycode="HK" value="852">Hong Kong (+852)</option>
									<option data-countrycode="HU" value="36">Hungary (+36)</option>
									<option data-countrycode="IS" value="354">Iceland (+354)</option>
									<option data-countrycode="IN" value="91">India (+91)</option>
									<option data-countrycode="ID" value="62">Indonesia (+62)</option>
									<option data-countrycode="IR" value="98">Iran (+98)</option>
									<option data-countrycode="IQ" value="964">Iraq (+964)</option>
									<option data-countrycode="IE" value="353">Ireland (+353)</option>
									<option data-countrycode="IL" value="972">Israel (+972)</option>
									<option data-countrycode="IT" value="39">Italy (+39)</option>
									<option data-countrycode="JM" value="1876">Jamaica (+1876)</option>
									<option data-countrycode="JP" value="81">Japan (+81)</option>
									<option data-countrycode="JO" value="962">Jordan (+962)</option>
									<option data-countrycode="KZ" value="7">Kazakhstan (+7)</option>
									<option data-countrycode="KE" value="254">Kenya (+254)</option>
									<option data-countrycode="KI" value="686">Kiribati (+686)</option>
									<option data-countrycode="KP" value="850">Korea North (+850)</option>
									<option data-countrycode="KR" value="82">Korea South (+82)</option>
									<option data-countrycode="KW" value="965">Kuwait (+965)</option>
									<option data-countrycode="KG" value="996">Kyrgyzstan (+996)</option>
									<option data-countrycode="LA" value="856">Laos (+856)</option>
									<option data-countrycode="LV" value="371">Latvia (+371)</option>
									<option data-countrycode="LB" value="961">Lebanon (+961)</option>
									<option data-countrycode="LS" value="266">Lesotho (+266)</option>
									<option data-countrycode="LR" value="231">Liberia (+231)</option>
									<option data-countrycode="LY" value="218">Libya (+218)</option>
									<option data-countrycode="LI" value="417">Liechtenstein (+417)</option>
									<option data-countrycode="LT" value="370">Lithuania (+370)</option>
									<option data-countrycode="LU" value="352">Luxembourg (+352)</option>
									<option data-countrycode="MO" value="853">Macao (+853)</option>
									<option data-countrycode="MK" value="389">Macedonia (+389)</option>
									<option data-countrycode="MG" value="261">Madagascar (+261)</option>
									<option data-countrycode="MW" value="265">Malawi (+265)</option>
									<option data-countrycode="MY" value="60">Malaysia (+60)</option>
									<option data-countrycode="MV" value="960">Maldives (+960)</option>
									<option data-countrycode="ML" value="223">Mali (+223)</option>
									<option data-countrycode="MT" value="356">Malta (+356)</option>
									<option data-countrycode="MH" value="692">Marshall Islands (+692)</option>
									<option data-countrycode="MQ" value="596">Martinique (+596)</option>
									<option data-countrycode="MR" value="222">Mauritania (+222)</option>
									<option data-countrycode="YT" value="269">Mayotte (+269)</option>
									<option data-countrycode="MX" value="52">Mexico (+52)</option>
									<option data-countrycode="FM" value="691">Micronesia (+691)</option>
									<option data-countrycode="MD" value="373">Moldova (+373)</option>
									<option data-countrycode="MC" value="377">Monaco (+377)</option>
									<option data-countrycode="MN" value="976">Mongolia (+976)</option>
									<option data-countrycode="MS" value="1664">Montserrat (+1664)</option>
									<option data-countrycode="MA" value="212">Morocco (+212)</option>
									<option data-countrycode="MZ" value="258">Mozambique (+258)</option>
									<option data-countrycode="MN" value="95">Myanmar (+95)</option>
									<option data-countrycode="NA" value="264">Namibia (+264)</option>
									<option data-countrycode="NR" value="674">Nauru (+674)</option>
									<option data-countrycode="NP" value="977">Nepal (+977)</option>
									<option data-countrycode="NL" value="31">Netherlands (+31)</option>
									<option data-countrycode="NC" value="687">New Caledonia (+687)</option>
									<option data-countrycode="NZ" value="64">New Zealand (+64)</option>
									<option data-countrycode="NI" value="505">Nicaragua (+505)</option>
									<option data-countrycode="NE" value="227">Niger (+227)</option>
									<option data-countrycode="NG" value="234">Nigeria (+234)</option>
									<option data-countrycode="NU" value="683">Niue (+683)</option>
									<option data-countrycode="NF" value="672">Norfolk Islands (+672)</option>
									<option data-countrycode="NP" value="670">Northern Marianas (+670)</option>
									<option data-countrycode="NO" value="47">Norway (+47)</option>
									<option data-countrycode="OM" value="968">Oman (+968)</option>
									<option data-countrycode="PW" value="680">Palau (+680)</option>
									<option data-countrycode="PA" value="507">Panama (+507)</option>
									<option data-countrycode="PG" value="675">Papua New Guinea (+675)</option>
									<option data-countrycode="PY" value="595">Paraguay (+595)</option>
									<option data-countrycode="PE" value="51">Peru (+51)</option>
									<option data-countrycode="PH" value="63">Philippines (+63)</option>
									<option data-countrycode="PL" value="48">Poland (+48)</option>
									<option data-countrycode="PT" value="351">Portugal (+351)</option>
									<option data-countrycode="PR" value="1787">Puerto Rico (+1787)</option>
									<option data-countrycode="QA" value="974">Qatar (+974)</option>
									<option data-countrycode="RE" value="262">Reunion (+262)</option>
									<option data-countrycode="RO" value="40">Romania (+40)</option>
									<option data-countrycode="RU" value="7">Russia (+7)</option>
									<option data-countrycode="RW" value="250">Rwanda (+250)</option>
									<option data-countrycode="SM" value="378">San Marino (+378)</option>
									<option data-countrycode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
									<option data-countrycode="SA" value="966">Saudi Arabia (+966)</option>
									<option data-countrycode="SN" value="221">Senegal (+221)</option>
									<option data-countrycode="CS" value="381">Serbia (+381)</option>
									<option data-countrycode="SC" value="248">Seychelles (+248)</option>
									<option data-countrycode="SL" value="232">Sierra Leone (+232)</option>
									<option data-countrycode="SG" value="65">Singapore (+65)</option>
									<option data-countrycode="SK" value="421">Slovak Republic (+421)</option>
									<option data-countrycode="SI" value="386">Slovenia (+386)</option>
									<option data-countrycode="SB" value="677">Solomon Islands (+677)</option>
									<option data-countrycode="SO" value="252">Somalia (+252)</option>
									<option data-countrycode="ZA" value="27">South Africa (+27)</option>
									<option data-countrycode="ES" value="34">Spain (+34)</option>
									<option data-countrycode="LK" value="94">Sri Lanka (+94)</option>
									<option data-countrycode="SH" value="290">St. Helena (+290)</option>
									<option data-countrycode="KN" value="1869">St. Kitts (+1869)</option>
									<option data-countrycode="SC" value="1758">St. Lucia (+1758)</option>
									<option data-countrycode="SD" value="249">Sudan (+249)</option>
									<option data-countrycode="SR" value="597">Suriname (+597)</option>
									<option data-countrycode="SZ" value="268">Swaziland (+268)</option>
									<option data-countrycode="SE" value="46">Sweden (+46)</option>
									<option data-countrycode="CH" value="41">Switzerland (+41)</option>
									<option data-countrycode="SI" value="963">Syria (+963)</option>
									<option data-countrycode="TW" value="886">Taiwan (+886)</option>
									<option data-countrycode="TJ" value="7">Tajikstan (+7)</option>
									<option data-countrycode="TH" value="66">Thailand (+66)</option>
									<option data-countrycode="TG" value="228">Togo (+228)</option>
									<option data-countrycode="TO" value="676">Tonga (+676)</option>
									<option data-countrycode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
									<option data-countrycode="TN" value="216">Tunisia (+216)</option>
									<option data-countrycode="TR" value="90">Turkey (+90)</option>
									<option data-countrycode="TM" value="7">Turkmenistan (+7)</option>
									<option data-countrycode="TM" value="993">Turkmenistan (+993)</option>
									<option data-countrycode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
									<option data-countrycode="TV" value="688">Tuvalu (+688)</option>
									<option data-countrycode="UG" value="256">Uganda (+256)</option>
									 <option data-countryCode="GB" value="44">UK (+44)</option> 
									<option data-countrycode="UA" value="380">Ukraine (+380)</option>
									<option data-countrycode="AE" value="971">United Arab Emirates (+971)</option>
									<option data-countrycode="UY" value="598">Uruguay (+598)</option>
									<option data-countryCode="US" value="1">USA (+1)</option> 
									<option data-countrycode="UZ" value="7">Uzbekistan (+7)</option>
									<option data-countrycode="VU" value="678">Vanuatu (+678)</option>
									<option data-countrycode="VA" value="379">Vatican City (+379)</option>
									<option data-countrycode="VE" value="58">Venezuela (+58)</option>
									<option data-countrycode="VN" value="84">Vietnam (+84)</option>
									<option data-countrycode="VG" value="84">Virgin Islands - British (+1284)</option>
									<option data-countrycode="VI" value="84">Virgin Islands - US (+1340)</option>
									<option data-countrycode="WF" value="681">Wallis &amp; Futuna (+681)</option>
									<option data-countrycode="YE" value="969">Yemen (North)(+969)</option>
									<option data-countrycode="YE" value="967">Yemen (South)(+967)</option>
									<option data-countrycode="ZM" value="260">Zambia (+260)</option>
									<option data-countrycode="ZW" value="263">Zimbabwe (+263)</option>
								</optgroup>
							</select> -->
							<i class="bi bi-asterisk font-13"></i>
                            <input type="number" required minlength="5" value=""  class="form-control rounded-xs " id="mobile" name="mobile" placeholder="Mobile">
                            <label for="mobile" class="color-theme">Mobile</label>
                            <span>(required)</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-at font-16"></i>
                            <input type="text"  minlength="8" maxlength="9" class="form-control rounded-xs " value="" id="inviteCode" name="inviteCode" placeholder="Enter Invite code">
                            <label for="inviteCode" class="color-theme">Invite Code</label>
                            <span >(Required)</span>
                        </div>
                        <!-- <p style="font-size:10px;color:blue;margin: 0px;padding: 0;float: right;" onclick="autofill()">Click here to autofill Invite Code</p> -->
						<!-- <script>
							function autofill()
							{
								document.getElementById("inviteCode").value="NXM000000";
							}
						</script> -->
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-asterisk font-13"></i>
                            <input type="password" class="form-control rounded-xs " id="password"  name="password" placeholder="Choose Password">
                            <label for="password" class="color-theme">Choose Password</label>
                            <span>(required)</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-asterisk font-13"></i>
                            <input type="password" class="form-control rounded-xs " id="txnPassword"  name="password_confirmation" placeholder="Transaction Password">
                            <label for="txnPassword" class="color-theme">Transaction Password</label>
                            <span>(required)</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 d-none">
                        <div class="form-check form-check-custom">
                            <input   class="form-check-input" type="checkbox" name="type" value="" id="c2a">
                            <label class="form-check-label font-12" for="c2a">I agree with the <a href="#">Terms and Conditions</a>.</label>
                            <i class="is-checked color-highlight font-13 bi bi-check-circle-fill"></i>
                            <i class="is-unchecked color-highlight font-13 bi bi-circle"></i>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <input type="submit" id="reg_btn" value="signup" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s mt-4">
                    </div>
                     <div class="col-6 text-center">
                        <a href="{{ route('login') }}" class="font-11 color-theme  pt-4 d-block"><span>Sign In Account</span></a>
                    </div>
				</form>
            </div>
        </div>
	</div>
	
	<script>
		$(document).ready(function(){
			$('#sponsor_id').on('change', function(){
				// $('#spon_msg').text('Searching...');
				var sponsor_id = this.value;
				$.ajax({
					url: "{{route('search.sponsorid')}}",
					type: "POST",
					data: {
						sponsor_id: sponsor_id,
						_token: '{{csrf_token()}}'
					},
					success: function(result){
						alert(result);
						
					}
				});
			});
		});
	</script>
  

</body>

</html>