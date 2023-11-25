@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="attendance-page">
        <div class="date-change">
            <p class="previous-day">
                <button class="previous-day_button" id="previous" onclick="previous();" >&lt;</button>
            </p>
            <div class="select-date" id="today">
                <p class="date" id="day">{{ $now_format }}</p>
            </div>
            <p class="next-day">
                <button class="next-day_button" id="next" onclick="next();">&gt;</button>
            </p>
        </div>
        <div class="work-time_list">
            <div class="list-title">
                <li class="list-title_item">名前</li>
                <li class="list-title_item">勤務開始</li>
                <li class="list-title_item">勤務終了</li>
                <li class="list-title_item">休憩時間</li>
                <li class="list-title_item">勤務時間</li>
            </div>
            <div class="work-time">
                <li class="list-content_item">テスト太郎</li>
                <li class="list-content_item">10:00:00</li>
                <li class="list-content_item">20:00:00</li>
                <li class="list-content_item">00:30:00</li>
                <li class="list-content_item">09:30:00</li>
            </div>
            <div class="work-time">
                <li class="list-content_item">テスト次郎</li>
                <li class="list-content_item">10:00:10</li>
                <li class="list-content_item">20:00:00</li>
                <li class="list-content_item">00:30:00</li>
                <li class="list-content_item">09:29:50</li>
            </div>
            <div class="work-time">
                <li class="list-content_item">テスト三郎</li>
                <li class="list-content_item">10:00:10</li>
                <li class="list-content_item">20:00:00</li>
                <li class="list-content_item">00:30:00</li>
                <li class="list-content_item">09:29:50</li>
            </div>
            <div class="work-time">
                <li class="list-content_item">テスト四郎</li>
                <li class="list-content_item">10:00:20</li>
                <li class="list-content_item">20:00:00</li>
                <li class="list-content_item">00:30:00</li>
                <li class="list-content_item">09:29:40</li>
            </div>
            <div class="work-time">
                <li class="list-content_item">テスト五郎</li>
                <li class="list-content_item">10:00:20</li>
                <li class="list-content_item">20:00:00</li>
                <li class="list-content_item">00:30:00</li>
                <li class="list-content_item">09:29:40</li>
            </div>
        </div>
        <!-- ページネーションの実装 -->
    </div>
</div>
@endsection