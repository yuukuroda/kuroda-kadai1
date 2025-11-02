@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="confirm__content">
    <!-- タイトル -->
    <div class="confirm__heading">
        <h2>confirm</h2>
    </div>
    <!-- 全体 -->
    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <!-- 名前確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                    </td>
                    <td class="confirm-table__text">
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                    </td>
                </tr>
                <!-- 性別確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="checkbox" name="gender" value="{{ $contact['gender'] }}" readonly />
                    </td>
                </tr>
                <!-- メールアドレス確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <!-- 電話番号確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                    </td>
                </tr>
                <!-- 住所確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <!-- 建物名確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <!-- お問い合わせ種類確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="kinds" value="{{ $contact['kinds'] }}" readonly />
                    </td>
                </tr>
                <!-- お問い合わせ内容確認 -->
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <button class="form__button-submit" type="submit">修正</button>
        </div>
    </form>
</div>
@endsection