@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

<div class="thanks">
    <div class="thanks__card">
        <p>仮登録ありがとうございます。<br>送られたメールのリンクを開いて本登録を完了してください。</p>
        <form class="login" action="/login" method="get">
            @csrf
            <button class="login__button">ログインする</button>
        </form>
    </div>
</div>

@endsection