@extends('admin.layouts.master2')
@section('title')
    {{ __('Login') }}
@stop

@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            {{-- ================================= left side ================================= --}}
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex">
                                        <a href="{{ url('/' . $page='Home') }}">
                                            <img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo">
                                        </a>
                                        <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Mora<span>So</span>ft</h1></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            @if($type == 'patient')
                                                <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول مريض</h3>
                                            @elseif($type == 'doctor')
                                                <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول دكتور</h3>
                                            @else
                                                <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول ادمن</h3>
                                            @endif
                                            <form method="POST" action="{{ route('dashboard.login') }}">
                                                @csrf
                                                {{-- +++++++++++++++++ Email inputfield ++++++++++++++++++ --}}
                                                <div class="form-group">
                                                    <label>
                                                        {{ __('Frontend/frontend.login_label1') }}
                                                    </label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                                {{-- +++++++++++++++++ password inputfield ++++++++++++++++++ --}}
                                                <div class="form-group">
                                                    <label>
                                                        {{ __('Frontend/frontend.login_label2') }}
                                                    </label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    {{-- +++++++++++++++++ Remember Me Checkbox ++++++++++++++++++ --}}
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Frontend/frontend.login_remember') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- +++++++++++++++++ Login Button ++++++++++++++++++ --}}
                                                <button type="submit" class="btn btn-main-primary btn-block mb-3">
                                                    {{ __('Frontend/frontend.login_button') }}
                                                </button>
                                            </form>
                                            <span>
                                                {{ __('Frontend/frontend.login_dont_have_account') }} </span>
                                                <a href="{{ url('/' . $page='register') }}">
                                                {{ __('Frontend/frontend.create_new_account') }}
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
            {{-- ================================= right side ================================= --}}
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        @if($type == 'patient')
                            <img src="{{ asset('assets/img/selection_page/bg/student_login.jpg') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        @elseif($type == 'doctor')
                            <img src="{{ asset('assets/img/selection_page/bg/parent_login.avif') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        @else
                            <img src="{{ asset('assets/img/selection_page/bg/login.jpg') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
