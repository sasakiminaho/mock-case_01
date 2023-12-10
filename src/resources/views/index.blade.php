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
                    <form action="{{ route('work_time/work_start') }}" method="POST">
                        @csrf
                        @method('POST')
                        <button class="work-start_button">勤務開始</button>
                    </form>
                </div>
                <div class="work-end">
                    <form action="{{ route('work_time/work_end') }}" method="POST">
                        @csrf
                        @method('POST')
                        <button class="work-end_button">勤務終了</button>
                    </form>
                </div>
            </div>
            <div class="bottom-button">
                <div class="break-start">
                    <form action="{{ route('break_time/break_start') }}" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="work_id" value="{{ $work_id['id'] }}" >
                        <button class="break-start_button" name="work_id">休憩開始</button>
                    </form>
                </div>
                <div class="break-end">
                    <form action="{{ route('break_time/break_end') }}" method="POST">
                        @csrf
                        @method('POST')
                        <button class="break-end_button">休憩終了</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection