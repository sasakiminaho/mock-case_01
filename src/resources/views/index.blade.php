@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="stamping-page">
        <div class="message">
            <p class="meeting-message">
            {{ Auth::user()->name }}さんお疲れ様です！</p>
        </div>
        <div class="stamping_button">
            <div class="top-button">
                <div class="work-start">
                    <button class="work-start_button">勤務開始</button>
                </div>
                <div class="work-end">
                    <button class="work-end_button">勤務終了</button>
                </div>
            </div>
            <div class="bottom-button">
                <div class="break-start">
                    <button class="break-start_button">休憩開始</button>
                </div>
                <div class="break-end">
                    <button class="break-end_button">休憩終了</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection