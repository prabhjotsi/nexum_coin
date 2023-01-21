<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Nexum Coin</title>
    <link rel="stylesheet" type="text/css" href="public/frontend/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="public/frontend/css/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="public/frontend/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <!-- <link rel="manifest" href="_manifest.html"> -->
    <meta id="theme-check" name="theme-color" content="#FFFFFF" />
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.html" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .card-style { overflow: hidden; border-radius: 22px; margin: 0 5px 12px; border: none; box-shadow: rgb(0 0 0 / 3%) 0 20px 25px -5px, rgb(0 0 0 / 2%) 0 10px 10px -5px; background-size: cover; background-repeat: no-repeat; background-position: center center;}
        
        .nav-tabs .nav-link {margin-bottom: -1px; background: 0 0; border: 1px solid transparent; border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; font-size: 20px;}
        .invalid-feedback {display: block;width: 100%;margin-top: 0.25rem;font-size: .875em;color: #dc3545;}
body{height: 100%;max-height: unset;background: url('public/frontend/images/1267580.jpg');
}

.form-custom>span{color:black; font-weight:600;}
.text-end>a>span{ color: black; font-weight: 600; background: green; padding: 10px; color: white; border-radius: 10px;}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal-bs3patch.css" integrity="sha512-PLPZdOXQAXELGb6+1GKTjIRzI9fiIYmI6280sxmd9dGDgPND3cWmxBddOtQHmUELldeVLIgl8FrLUHyz3B9Y3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="theme-light">
   
    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

        <div >
            <div class=" footer-clear">
                <div class="card-center mt-5 mx-3 px-4 py-4 bg-white rounded-m" style="background: white;">
                    <img src="public/frontend/images/nxm_logo.svg" style="width:200px" />
                    <h1 class="font-30 font-800 mb-0">Nexum Coins</h1>
                    <p>Login to your Account.</p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <!-- <input type="hidden" name="_token" value="lSoTfyWA3mPkyZLIwbQwMYsOdMqz3NMwMVQn50m5">                <div class="row"> -->
                        <div class="col-12 col-lg-6 col-md-6">
                            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                                <i class="bi bi-person-circle font-13"></i>
                                <input type="email" required class="form-control "  rounded-xs id="email" name="email" :value="old('email')" placeholder="Enter User Id">
                                <label for="ownid" class="color-theme" :value="__('Email')">User Id</label>
                                <span>(required)</span>
                            
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6">
                            <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
                                <i class="bi bi-asterisk font-13"></i>
                                <input type="password" required autocomplete="current-password" class="form-control rounded-xs "  id="password" name="password" placeholder="Enter Password">
                                <label for="password" class="color-theme" :value="__('Password')">Password</label>
                                <span>(required)</span>
                                                
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" name="type" value="" id="c2a">
                                <label class="form-check-label font-12" for="c2a">Remember this account</label>
                                <i class="is-checked color-highlight font-13 bi bi-check-circle-fill"></i>
                                <i class="is-unchecked color-highlight font-13 bi bi-circle"></i>
                            </div>
                        </div>
                        <x-button class="btn btn-primary m-3">
                            {{ __('Log in') }}
                        </x-button>
                        <!-- <input type="submit" value="Sign In" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s mt-4"> -->
                    </form>
                    <div class="row">
                        <div class="col-6 text-start">
                            <a  class="font-11 color-theme  pt-4 d-block" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route('register') }}" class="font-11 color-theme  pt-4 d-block">
                                <span>Create Account</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script src="scripts/bootstrap.min.html"></script> -->
        <script src="public/frontend/js/custom.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="public/frontend/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>