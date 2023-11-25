@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <div class="login-form__heading">
        <h2>ログイン</h2>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-item">
                <input type="email" class="form__group-input" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-item">
                <input type="password"name="password" class="form__group-input" placeholder="パスワード">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="register__link">
        <div class="register__link-exp">
            アカウントをお持ちでない方はこちら
        </div>
        <div class="register__button">
            <a href="/register" class="register__button-link">会員登録</a>
        </div>
    </div>
</div>
@endsection