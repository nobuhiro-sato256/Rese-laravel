@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all')}}">
@endsection
@section('content')
<div>
    @foreach($shops as $shop)
    <div>
        <img src="{{$shop['shop_image']}}" width="200" height="150">
        <p>{{$shop['store_name']}}</p>
        <p>#{{$shop->area['name']}}</p>
        <P>#{{$shop->genre['name']}}</P>
        <a href="{{ route('detail',['id' => $shop['id'] ]) }}">詳しく見る</a>
        <form action="" method="get">
            <input type="submit" name="" value="お気に入りボタン(仮定)">
        </form>
    </div>
    @endforeach
</div>
@endsection