@extends('layouts.app')


@section('search')
<form action="/logout" method="post">
    @csrf
    <input type="submit" name="logout" value="ログアウト">
</form>
<!-- ここに検索窓追加予定 -->
@endsection

@section('content')
<div>
    <div>
        <img>
        <p>仙人</p>
        <p>#エリア</p>
        <P>#ジャンル</P>
        <form action="" method="get">
            <input type="submit" name="" value="詳しく見る">
        </form>
        <form action="" method="get">
            <input type="submit" name="" value="お気に入りボタン(仮定)">
        </form>
    </div>
</div>
@endsection