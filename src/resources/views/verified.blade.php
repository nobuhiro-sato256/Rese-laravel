@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

<div class="thanks">
    <div class="thanks__card">
        <p>本登録はまだ完了しておりません。<br>送られたメールのリンクを開いて本登録を完了してください。</p>
        <p>再送信を希望の方は以下のボタンを押してください。</p>
        <form class="retransmission" action="/email/verification-notification" method="post">
            @csrf
            <button class="retransmission__button">メールの再送信</button>
        </form>
        @if(session('message'))
        <p>{{ session('message') }}</p>
        @endif
    </div>
</div>

@endsection