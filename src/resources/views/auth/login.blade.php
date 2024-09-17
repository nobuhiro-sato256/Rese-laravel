@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
@endsection

@section('content')
<div class="login">
    <div class="login__card">
        <div class="login__title">
            <p>Login</p>
        </div>
        <div class="login__main">
            <form class="login__form" action="/login" method="post">
                @csrf
                <div class="login__form-box">
                    <div class="login__form-item">
                        <i class="bi bi-envelope-fill"></i>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
                    </div>
                    @error('email')
                    @foreach ($errors->get('email') as $error)
                    <P class="login__error">{{ $error }}</P>
                    @endforeach
                    @enderror
                    <div class="login__form-item">
                        <i class="bi bi-lock-fill"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    @error('password')
                    @foreach ($errors->get('password') as $error)
                    <P class="login__error">{{ $error }}</P>
                    @endforeach
                    @enderror
                </div>
                <div class="login__form-button">
                    <input type="submit" value="ログイン" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
