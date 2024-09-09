@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

<div class="thanks">
    <div class="thanks__card">
        <p>会員登録ありがとうございます</p>
        <form class="login" action="/login" method="get">
            @csrf
            <button>ログインする</button>
        </form>
    </div>
</div>

@endsection