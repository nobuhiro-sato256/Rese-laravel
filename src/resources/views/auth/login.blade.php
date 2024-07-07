@extends('layouts.app')


@section('content')
<div>
    <div>
        <h2>Login</h2>
    </div>
    <form action="/login" method="post">
        @csrf
        @error('email')
        @foreach ($errors->get('email') as $error)
        <P>{{ $error }}</P>
        @endforeach
        @enderror
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
        @error('password')
        @foreach ($errors->get('password') as $error)
        <P>{{ $error }}</P>
        @endforeach
        @enderror
        <input type="password" name="password" placeholder="Password" />
        <input type="submit" value="ログイン" />
    </form>
</div>
@endsection
