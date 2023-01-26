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
                            <span>(required)</span> 
							 <span id="spon_msg"></span>
							@error('sponsor_id')
								<br>
								<span class="text-danger">{{$message}}</span>
							@enderror
                        </div>
						
                    </div>
					<div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-person-circle font-13"></i>
                            <input type="text" required  class="form-control rounded-xs " id="name" name="name" :value="old('name')" placeholder="Enter Name">
                            <label for="name" :value="__('Name')" class="color-theme">Name</label>
                            <span>(required)</span>
							</div>
								@error('name')
										<span class="text-danger">{{$message}}</span>
								@enderror
                        </div>
                    </div>
					<div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-person-circle font-13"></i>
                            <input type="email" required  class="form-control rounded-xs " id="email" name="email" :value="old('email')" placeholder="Enter Email">
                            <label for="email" :value="__('Email')" class="color-theme">Email</label>
                            <span>(required)</span>
                        </div>
							@error('email')
								<span class="text-danger">{{$message}}</span>
							@enderror
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent" style="display: flex;">
							<i class="bi bi-asterisk font-13"></i>
                            <input type="number" required  value="old('phone')"  class="form-control rounded-xs " id="phone" name="phone" placeholder="Mobile">
                            <label for="phone" :value="__('Phone')" class="color-theme">Mobile</label>
                            <span>(required)</span>
                        </div>
							@error('phone')
								<span class="text-danger">{{$message}}</span>
							@enderror
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-at font-16"></i>
                            <input type="text" required class="form-control rounded-xs "  id="username" name="username" placeholder="Enter Username">
                            <label for="username"  class="color-theme">Username</label>
                            <span >(Required)</span>
                        </div>
							@error('username')	
								<span class="text-danger">{{$message}}</span>
							@enderror
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-asterisk font-13"></i>
                            <input type="password" required class="form-control rounded-xs " id="password"  name="password" placeholder="Choose Password">
                            <label for="password" :value="__('Password')" class="color-theme">Choose Password</label>
                            <span>(required)</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                            <i class="bi bi-asterisk font-13"></i>
                            <input type="password" required class="form-control rounded-xs " id="password_confirmation"  name="password_confirmation" placeholder="Confirm Password">
                            <label for="password_confirmation" :value="__('Confirm Password')" class="color-theme">Confirm Password</label>
                            <span>(required)</span>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-lg-6 col-md-6 d-none">
                        <div class="form-check form-check-custom">
                            <input   class="form-check-input" type="checkbox" name="type" value="" id="c2a">
                            <label class="form-check-label font-12" for="c2a">I agree with the <a href="#">Terms and Conditions</a>.</label>
                            <i class="is-checked color-highlight font-13 bi bi-check-circle-fill"></i>
                            <i class="is-unchecked color-highlight font-13 bi bi-circle"></i>
                        </div>
                    </div> -->
                    <div class="col-6 ">
					<x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
					<!-- <input type="submit" id="reg_btn" value="signup" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s mt-4"> -->
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
				$('#spon_msg').text('Searching...');
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