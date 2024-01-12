@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="main">

    <div class="attendance-page">
        <div class="date-change">
            <p class="previous-day">
                <button class="previous-day_button">&lt;</button>
            </p>
            <div class="select-date" id="today">
                <p class="date">{{ $now_date }}</p>
            </div>
            <p class="next-day">
                <button class="next-day_button">&gt;</button>
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
            @foreach ($user_data as $user_list)
            <div class="work-time">
                <li class="list-content_item">{{ $user_list['user_id'] }}</li>
                <li class="list-content_item">{{ $user_list['created_at']->format('H:i:s') }}</li>
                <li class="list-content_item">{{ $user_list['updated_at']->format('H:i:s') }}</li>
                <li class="list-content_item"></li>
                <li class="list-content_item">09:30:00</li>
            </div>
            @endforeach
        </div>
        <!-- ページネーションの実装 -->
    </div>
</div>
@endsection