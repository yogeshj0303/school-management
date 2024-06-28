<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>School Management | Login</title>

<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/icons/flags/flags.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="{{asset('assets/img/login.png')}}" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>School Management | Login</h1>
<!-- <p class="account-subtitle">Need an account? <a href="register.html">Sign Up</a></p> -->
<h2>Sign in</h2>

<!-- resources/views/auth/login.blade.php -->
<form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <div class="form-group">
        <label>Username <span class="login-danger">*</span></label>
        <input class="form-control" type="text" name="username" value="{{ old('username') }}" autofocus>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
    </div>
    <div class="form-group">
        <label>Password <span class="login-danger">*</span></label>
        <input class="form-control pass-input" type="password" name="password" >
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="profile-views feather-eye toggle-password"></span>
    </div>
    <div class="forgotpass">
        <div class="remember-me">
            <label class="custom_check mr-2 mb-0 d-inline-flex remember-me">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="checkmark"></span>
                Remember me
            </label>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
</form>


</div>
</div>
</div>
</div>
</div>
</div>

<x-footer />