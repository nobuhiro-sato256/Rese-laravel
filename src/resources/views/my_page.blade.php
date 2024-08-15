@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css')}}">
@endsection

@section('content')

<div>
    <div>
        <p>予約状況</p>
        @foreach($reservations as $order => $reservation)
        <div>
            <div>時計マーク</div>
            <p>予約{{++$order}}</p>
            <table>
                <tr>
                    <th>Shop</th>
                    <td>{{$reservation->shop['store_name']}}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{$reservation['date']}}</td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>{{$reservation['time']}}</td>
                </tr>
                <tr>
                    <th>Number</th>
                    <td>{{$reservation['number']}}人</td>
                </tr>
            </table>
            <form action="/delete_reservation" method="get">
            @csrf
                <input type="hidden" name="reservation_id" value="{{$reservation->id}}" />
                <button class="">✕</button>
            </form>
            <form action="/reservation_change" method="post">
            @csrf
                <input type="hidden" name="shop_id" value="{{$reservation['shop_id']}}" />
                <input type="hidden" name="user_id" value="{{$reservation['user_id']}}" />
                <button class="">予約変更</button>
            </form>
        </div>
        @endforeach
    </div>

    <div>
        <p></p>
    </div>
    @foreach($favorites as $favorite)
    <div>
        <img src="{{$favorite->shop['shop_image']}}" width="200" height="150">
        <p>{{$favorite->shop['store_name']}}</p>
        <p>#{{$favorite['area']}}</p>
        <P>#{{$favorite['genre']}}</P>
        <a href="{{ route('detail',['id' => $favorite->shop['id'] ]) }}">詳しく見る</a>
        <form action="/favorite" method="get">
        @csrf
            <input type="hidden" name="shop_id" value="{{ $favorite->shop['id'] }}" />
            <input type="hidden" name="page" value="my_page" />
            <button class="heart__favorite"></button>
        </form>
    </div>
    @endforeach
</div>
@endsection
