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
    
    @foreach($shops as $shop)
    <div>
        <img src="{{$shop['shop_image']}}" width="200" height="150">
        <p>{{$shop['store_name']}}</p>
        <p>#{{$shop->area['name']}}</p>
        <P>#{{$shop->genre['name']}}</P>
        <form action="" method="get">
            <input type="submit" name="" value="詳しく見る">
        </form>
        <form action="" method="get">
            <input type="submit" name="" value="お気に入りボタン(仮定)">
        </form>
    </div>
    @endforeach
</div>
@endsection