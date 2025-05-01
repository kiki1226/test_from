@extends('admin.layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/Admin/search.css') }}">
@endsection

@section('content')
<div class="admin-search-form">
    <h2>顧客リスト検索</h2>
        <form action="{{ route('admin.dashboard') }}" method="get">
        @csrf
        <div class="form-group">
            <label for="keyword">名前またはメールアドレス</label>
            <input type="text" id="keyword" name="keyword" class="form-control">
        </div>

        <div class="form-group">
            <label for="gender">性別</label>
            <select id="gender" name="gender" class="form-control">
                <option value="">すべて</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inquiry_type">お問い合わせの種類</label>
            <select id="inquiry_type" name="inquiry_type" class="form-control">
                <option value="">すべて</option>
                <option value="product">製品について</option>
                <option value="service">サービスについて</option>
                <option value="trouble">商品トラブルについて</option>
                <option value="shop">ショップへのお問い合わせ</option>
                <option value="other">その他</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">年／月／日</label>
            <input type="date" id="date" name="date" class="form-control">
        </div>

        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">検索</button>
            <button type="reset" class="btn btn-secondary">リセット</button>
        </div>
</div>