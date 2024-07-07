@extends('layouts.app')


@section('content')
<div>
    <div>
        <h2>Registration</h2>
    </div>
    <form action="/register" method="post">
        @csrf
        @error('name')
        @foreach ($errors->get('name') as $error)
        <p>{{ $error }}</p>
        @endforeach
        @enderror
        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" />
        @error('email')
        @foreach ($errors->get('email') as $error)
        <p>{{ $error }}</p>
        @endforeach
        @enderror
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
        @error('password')
        @foreach ($errors->get('password') as $error)
        <p>{{ $error }}</p>
        @endforeach
        @enderror
        <input type="password" name="password" placeholder="Password" />
        <input type="submit" value="登録" />
    </form>
</div>
@endsection