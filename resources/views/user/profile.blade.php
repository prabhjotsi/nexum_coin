@extends('user.layout')
@section('profile_active', 'active')
@section('content')

    <div class="pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">      
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <div>
                                            <span class="heading">{{Auth::user()->total_group}}</span>
                                            <span class="description">Total Group</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 order-xl-1" style="margin-left:250px;">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                <h3 class="mb-0">My account</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">My information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Username</label>
                                                <input type="text" class="form-control form-control-alternative" placeholder="Username" value="{{Auth::user()->username}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email address</label>
                                                <input type="email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="{{Auth::user()->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-first-name">First name</label>
                                                <input type="text" class="form-control form-control-alternative" placeholder="First name" value="{{Auth::user()->first_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">Last name</label>
                                                <input type="text" class="form-control form-control-alternative" placeholder="Last name" value="{{Auth::user()->last_name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                            </form>
                                    <!-- referal code link secure username is encoded form -->
                            <?php
                                $s = base64_encode(Auth::user()->username);
                            ?>
                            <h1 class="mb-0 text-center" style="font-weight:bolder; font-size:17px;">Share Your Link</h1>
                            <center>
                                <input type="text" class="form-control text-center" id="myInput" value="{{route('refferal.register', $s)}}" readonly >
                            </center>
                            <div class="card-footer text-center">
                                <a class="btn btn-primary" style="background:#2568b7" target="_blank" href="https://www.facebook.com/sharer.php?u={{route('refferal.register', Auth::user()->username)}}" title="Share via Facebook"><i class="fa fa-facebook fa-2x"></i></a>
                                <a class="btn btn-success" style="background:#01ef52" target="_blank" href="https://api.whatsapp.com/send?text={{route('refferal.register', Auth::user()->id)}}" title="Share via Whatsapp" data-action="share/whatsapp" ><i class="fa fa-whatsapp fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection