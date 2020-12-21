@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: center; background-color: rgba(255,249,255,0.73); padding: 30px">
    <div class="container main-register fl-wrap" style="max-width: 500px">
        <h3>Sign In <span>iCheck<strong>Rental</strong></span></h3>
        <div class="soc-log fl-wrap">
            <p>For faster login or register use your social account.</p>
            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
        </div>
        <div class="log-separator fl-wrap"><span>or</span></div>
        <div id="tabs-container">
            <ul class="tabs-menu">
                <li class="current"><a href="#tab-1">Login</a></li>
                <li><a href="#tab-2">Register</a></li>
            </ul>
            <div class="tab">
                <div id="tab-1" class="tab-content">
                    <div class="custom-form">
                        <form action="{{ route('login') }}" method="post" name="registerform">
                            @csrf
                            <label>Email Address * </label>
                            <input class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required type="email" onClick="this.select()">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @endif
                            <label>Password * </label>
                            <input name="password" type="password"
                                   class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   onClick="this.select()" value="">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            @endif
                            <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                            <div class="clearfix"></div>
                            <div class="filter-tags">
                                <input id="check-a" type="checkbox" name="remember">
                                <label for="check-a">Remember me</label>
                            </div>
                        </form>
                        <div class="lost_password">
                            <a href="{{ route('password.request') }}">Lost Your Password?</a>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div id="tab-2" class="tab-content">
                        <div class="custom-form">
                            <form action="{{ route('register') }}" method="post" name="registerform"
                                  class="main-register-form" id="main-register-form2">
                                @csrf
                                <label>First Name * </label>
                                <input name="first_name" type="text"
                                       class="{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                       value="{{ old('first_name') }}" required onClick="this.select()">
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                @endif

                                <label>Last Name *</label>
                                <input name="last_name" type="text" onClick="this.select()"
                                       class="{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                       value="{{ old('last_name') }}" required>
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                @endif

                                <label>Select Role *</label>
                                <select name="role">
                                    <option value="" disabled selected>Select Role</option>
                                    <option value="company" @if(old('role')=="company" ) selected="selected"
                                            @endif>Company
                                    </option>
                                    <option value="customer" @if(old('role')=="customer" ) selected="selected"
                                            @endif>Customer
                                    </option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('role') }}</strong>
                                            </span>
                                @endif

                                <label>Mobile Phone *</label>
                                <input name="phone" type="text" onClick="this.select()"
                                       class="{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                       value="{{ old('phone') }}" required>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                @endif

                                <label>Email Address *</label>
                                <input name="email" type="email" onClick="this.select()"
                                       class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif

                                <label>Password *</label>
                                <input name="password" type="password" onClick="this.select()"
                                       class="{{ $errors->has('Password') ? ' is-invalid' : '' }}"
                                       value="{{ old('Password') }}" required>
                                @if ($errors->has('Password'))
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Password') }}</strong>
                                            </span>
                                @endif
                                <label>Password Confirmation*</label>
                                <input name="password_confirmation" type="password" onClick="this.select()"
                                       required>

                                <!--Repeat Password-->
                                <button type="submit" class="log-submit-btn"><span>Register</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
