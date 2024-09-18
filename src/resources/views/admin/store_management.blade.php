@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/store_management.css')}}">
@endsection

@section('content')

<div class="management">
    <div class="management__top">
        <p>店舗情報</p>
        <button onclick="location.href='{{ route('new_store') }}' ">新規作成</button>
    </div>
    <div class="management__card">
        <div class="store__information">
            <p class="store__name"></p>
            <p class="store__area"></p>
            <p class="store__genre"></p>
            <p class="store__description"></p>
            <div class="store__image"></div>
        </div>
        <div class="store__group">
            <div class="store__evaluation"></div>
            <form class="store__reservation" action="" method="get">
                <button class="store__reservation-button">予約情報</button>
            </form>
            <div class="store__block">
                <form class="store__edit" action="" method="get">
                    <button class="store__edit-button">編集</button>
                </form>
                <form class="store__delete" action="" method="get">
                    <button class="store__delete-button">削除</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection