@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css')}}">
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
        <form action="/favorite" method="get">
        @csrf
            <input type="hidden" name="shop_id" value="{{ $shop['id'] }}" />
        @php
            $favored = false;
        @endphp
        @foreach($favorites as $favorite)
            @if($shop['id'] == $favorite['shop_id'])
                @php
                    $favored = true;
                    break;
                @endphp
            @endif
        @endforeach
        @if($favored)
            <button class="heart__favorite"></button>
        @else
            <button class="heart"></button>
        @endif
        </form>
    </div>
    @endforeach
</div>
@endsection