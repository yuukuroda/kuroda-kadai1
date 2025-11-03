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
    <form class="form" action="/contacts/confirm" method="post" novalidate>
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
                    <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- 名前 -->
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="form__error">
                    @error('first_name')
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
            <div class="form__group-check">
                <div class="form__input--check">
                    <input type="radio" name="gender" value="{{ old('gender') }}" />
                    <span class="form__check--label">男性</span>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- 女性 -->
            <div class="form__group-check">
                <div class="form__input--check">
                    <input type="radio" name="gender" value="{{ old('gender') }}" />
                    <span class="form__check--label">女性</span>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- その他 -->
            <div class="form__group-check">
                <div class="form__input--check">
                    <input type="radio" name="gender" value="{{ old('gender') }}" />
                    <span class="form__check--label">その他</span>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- メールアドレス入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- 電話番号入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel') }}" />
                </div>
                <div class="tel_hyphen">-</div>
                <div class="form__input--text">
                    <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel') }}" />
                </div>
                <div class="tel_hyphen">-</div>
                <div class="form__input--text">
                    <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- 住所入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- 建物名入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション" value="{{ old('building') }}" />
                </div>
                <div class="form__error">
                    @error('building')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- お問い合わせの種類選択 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select class="create-form__item-select" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>
                <!-- <select class="form__select--text"
                    type="text" name="kinds" placeholder="選択してください" value="{{ old('kinds') }}">
                    <option value="deliver">商品のお届けについて</option>
                    <option value="exchange">商品の交換について</option>
                    <option value="trouble">商品のトラブルについて</option>
                    <option value="inquiry">ショップへの問い合わせ</option>
                    <option value="others">その他</option>
                </select> -->
                <div class="form__error">
                    @error('kinds')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- お問い合わせ内容入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}" />
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <!-- 確認画面ボタン -->
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>