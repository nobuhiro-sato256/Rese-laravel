@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <form action="/" method="get">
                @csrf
                <input type="submit" value="<">
            </form>
            <p>{{$shop['store_name']}}</p>
        </div>
        <div>
            <img src="{{$shop['shop_image']}}" width="300" height="250">
            <P>#{{$shop->area['name']}}</P>
            <p>#{{$shop->genre['name']}}</p>
            <P>{{$shop['summary']}}</P>
        </div>
        <div>
            <form action="/reservation" method="post">
                @csrf
                <div>
                    <p>予約</p>
                    @if (Auth::check())
                        <input type="hidden" name="user_id" value="{{Auth::id()}}" />
                    @endif
                    <input type="hidden" name="shop_id" value="{{$shop['id']}}" />
                    <input type="date" name="date" value="{{$today_date}}"/>
                    <input type="time" name="time" min="09:00" max="18:00" />
                    <select name="number" >
                        <option value="1">1人</option>
                        <option value="2">2人</option>
                        <option value="3">3人</option>
                        <option value="4">4人</option>
                        <option value="5">5人</option>
                    </select>
                </div>
                <div>
                    <p>Shop</p>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Number</p>
                </div>
                <div>
                    <input type="submit" value="予約する" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection