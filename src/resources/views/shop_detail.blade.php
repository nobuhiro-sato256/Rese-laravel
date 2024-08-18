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
            @if(!empty($today_date))
            <form action="/reservation" method="post">
                @csrf
                <div>
                    <p>予約</p>
                    @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{Auth::id()}}" />
                    @endif
                    <input type="hidden" name="shop_id" value="{{$shop['id']}}" />
                    <input type="date" name="date" oninput="finalConfirmation()" id="date" value="{{$today_date}}"/>
                    <input type="time" name="time" oninput="finalConfirmation()" id="time" min="09:00" max="18:00" />
                    <select name="number" oninput="finalConfirmation()" id="number" >
                        <option value="1">1人</option>
                        <option value="2">2人</option>
                        <option value="3">3人</option>
                        <option value="4">4人</option>
                        <option value="5">5人</option>
                    </select>
                </div>
                <div>
                    <div>
                        <p>Shop</p>
                        <p>{{$shop['store_name']}}</p>
                    </div>
                    <div>
                        <p>Date</p>
                        <p id="date"></p>
                    </div>
                    <div>
                        <p>Time</p>
                        <p id="time"></p>
                    </div>
                    <div>
                        <p>Number</p>
                        <p id="number"></p>
                    </div>
                </div>
                <div>
                    <input type="submit" value="予約する" />
                </div>
                @else
                <form action="/update" method="post">
                @csrf
                <div>
                    <p>予約変更</p>
                    @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{Auth::id()}}" />
                    @endif
                    <input type="hidden" name="shop_id" value="{{$shop['id']}}" />
                    <input type="date" name="date" value="{{$reservation['date']}}"/>
                    <input type="time" name="time" min="09:00" max="18:00" />
                    <select name="number"  >
                        <option value="1">1人</option>
                        <option value="2">2人</option>
                        <option value="3">3人</option>
                        <option value="4">4人</option>
                        <option value="5">5人</option>
                    </select>
                </div>
                <div class="final__confirmation">
                    <p>Shop</p>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Number</p>
                </div>
                <div>
                    <input type="hidden" name="id" value="{{$reservation['id']}}" />
                    <input type="submit" value="予約変更" />
                </div>
            </form>
            @endif
        </div>
    </div>
</div>

<script>
    function finalConfirmation(){
        document.getElementById()
    }
</script>
@endsection