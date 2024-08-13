@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css')}}">
@endsection

@section('content')

<div>
    <div>
        <p>予約状況</p>
        @foreach($shops as $order => $shop)
        <div>
            <div>時計マーク</div>
            <p>予約{{++$order}}</p>
            <table>
                <tr>
                    <th>Shop</th>
                    <td>{{$shop->shop['store_name']}}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{$shop['date']}}</td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>{{$shop['time']}}</td>
                </tr>
                <tr>
                    <th>Number</th>
                    <td>{{$shop['number']}}人</td>
                </tr>
            </table>
            <form action="/delete_reservation" method="get">
            @csrf
                <input type="hidden" name="reservation_id" value="{{$shop->id}}" />
                <button class="">✕</button>
            </form>
        </div>
        @endforeach
    </div>

    <div>
        <p></p>
    </div>
</div>
@endsection
