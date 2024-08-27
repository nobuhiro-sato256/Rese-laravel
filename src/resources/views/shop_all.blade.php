@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css')}}">
@endsection

@section('search')

<div class="search">
    <form action="/search" method="get">
        <!-- <span class="search__span"> -->
            <select class="search__select" name="area">
                <option value="">All area</option>
                <option value="1">東京都</option>
                <option value="2">大阪府</option>
                <option value="3">福岡県</option>
            </select>
        <!-- </span> -->
        <!-- <span class="search__span"> -->
            <select class="search__select" name="genre">
                <option value="">All genre</option>
                <option value="1">焼き肉</option>
                <option value="2">居酒屋</option>
                <option value="3">イタリアン</option>
                <option value="4">ラーメン</option>
                <option value="5">寿司</option>
            </select>
        <!-- </span> -->
        <span>
            <input type="text" name="store_name" placeholder="Search..." />
            <button type="submit"></button>
        </span>
    </form>
</div>

@endsection

@section('content')
<div class="list">
    @foreach($shops as $shop)
    <div class="shop">
        <img class="shop__image" src="{{$shop['shop_image']}}" >
        <div class="shop__content">
            <p class="shop__title">{{$shop['store_name']}}</p>
            <div class="shop__tag">
                <p>#{{$shop->area['name']}}</p>
                <P>#{{$shop->genre['name']}}</P>
            </div>
            <div class="shop__item">
                <button class="shop__button" onclick="location.href='{{ route('detail',['id' => $shop['id'] ]) }}'">詳しく見る</button>
                <form class="shop__favorite" action="/favorite" method="get">
                @csrf
                    <input type="hidden" name="shop_id" value="{{ $shop['id'] }}" />
                    <input type="hidden" name="page" value="shop_all" />
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
        </div>
    </div>
    @endforeach
</div>
@endsection