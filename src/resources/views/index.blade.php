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
                        @if(optional($work_data)->work_start === Null || !(optional($work_data)->work_end === Null))
                        <button class="work-start_button" >勤務開始</button>
                        <input type="hidden" name="id" value="{{ optional($work_data)->id }}"  />
                        @else
                        <button class="disabled_button" disabled>勤務開始</button>
                        @endif
                    </form>
                </div>
                <div class="work-end">
                    <form action="{{ route('work_time/work_end') }}" method="POST">
                        @csrf
                        @method('POST')
                        @if( (!(optional($work_data)->work_start === Null) && (optional($work_data)->work_end === Null)&& optional($break_data)->break_start === Null) || (optional($work_data)->work_end === Null && !(optional($break_data)->break_end === Null)))
                        <button class="work-end_button">勤務終了</button>
                        @else
                        <button class="disabled_button" disabled>勤務終了</button>
                        @endif
                    </form>
                </div>
            </div>
            <div class="bottom-button">
                <div class="break-start">
                    <form action="{{ route('break_time/break_start') }}" method="POST" >
                        @csrf
                        @method('POST')
                        @if(optional($work_data)->work_end === Null && !(optional($break_data)->break_end === Null) || (!(optional($work_data)->work_start === Null) && optional($work_data)->work_end === Null && optional($break_data)->break_start === Null))
                        <input type="hidden" name="id" value="{{ optional($work_data)->id }}" />
                        <button class="break-start_button">休憩開始</button>
                        @else
                        <button class="disabled_button" disabled>休憩開始</button>
                        @endif
                    </form>
                </div>
                <div class="break-end">
                    <form action="{{ route('break_time/break_end') }}" method="POST">
                        @csrf
                        @method('POST')
                        @if(!(optional($break_data)->break_start === Null) && optional($break_data)->break_end === Null )
                        <input type="hidden" name="id" value="{{ optional($break_data)->id  }}" />
                        <button class="break-end_button">休憩終了</button>
                        @else
                        <button class="disabled_button" disabled>休憩終了</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
