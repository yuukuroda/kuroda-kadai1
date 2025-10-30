@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="contact-form__content">
    <!-- タイトル -->
    <div class="contact-form__heading">
        <h2>contact</h2>
    </div>
    <!-- フォーム全体 -->
    <form class="form" action="/confirm" method="post" novalidate>
        @csrf
        <!-- 名前入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <!-- 苗字 -->
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:山田" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- 名前 -->
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:太郎" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- 性別選択 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別
                </span>
                <span class="form__label--required">※</span>
            </div>
            <!-- 男性 -->
            <div class="form__group-select">
                <div class="form__input--select">
                    <input type="checkbox" name="sex" value="{{ old('sex') }}" />
                    <span class="form__select--label">男性</span>
                </div>
                <div class="form__error">
                    @error('sex')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- 女性 -->
            <div class="form__group-select">
                <div class="form__input--select">
                    <input type="checkbox" name="sex" value="{{ old('sex') }}" />
                    <span class="form__select--label">女性</span>
                </div>
                <div class="form__error">
                    @error('sex')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- その他 -->
            <div class="form__group-select">
                <div class="form__input--select">
                    <input type="checkbox" name="sex" value="{{ old('sex') }}" />
                    <span class="form__select--label">その他</span>
                </div>
                <div class="form__error">
                    @error('sex')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


    </form>