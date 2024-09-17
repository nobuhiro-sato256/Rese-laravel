@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/auth/register.css')}}">
@endsection

@section('content')
<div class="register">
    <div class="register__card">
        <div class="register__title">
            <p>Registration</p>
        </div>
        <div class="register__main">
            <form class="register__form" action="/register" method="post">
                @csrf
                <div class="register__form-box">
                    <div class="register__form-item">
                        <i class="bi bi-person-fill"></i>
                        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" />
                    </div>
                    @error('name')
                    @foreach ($errors->get('name') as $error)
                    <p class="register__error">{{ $error }}</p>
                    @endforeach
                    @enderror
                    <div class="register__form-item">
                        <i class="bi bi-envelope-fill"></i>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                    </div>
                    @error('email')
                    @foreach ($errors->get('email') as $error)
                    <p class="register__error">{{ $error }}</p>
                    @endforeach
                    @enderror
                    <div class="register__form-item">
                        <i class="bi bi-lock-fill"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    @error('password')
                    @foreach ($errors->get('password') as $error)
                    <p class="register__error">{{ $error }}</p>
                    @endforeach
                    @enderror
                </div>
                <div class="register__form-button">
                    <input type="submit" value="登録" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection