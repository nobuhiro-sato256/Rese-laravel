@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css')}}">
@endsection

@section('content')

<div>
    <div>
        <p>予約状況</p>
        @foreach($shops as $shop)
        <div>
            <div>時計マーク</div>
            <p>予約内容</p>
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
        </div>
        @endforeach
    </div>

    <div>

    </div>
</div>
@endsection
