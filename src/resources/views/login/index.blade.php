@extends('login.layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login/register.css') }}">
@endsection

@section('content')
<div class="from__content">
    <h1>Register</h1>
    <div class="container">
        <form class="form" action="/login/login" method="post">
        @csrf
            <div class="form-group">
                <label for="name">名前:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group-bottom">
            <button type="submit" class="submit-button">登録</button>
            </div>
        </form>
        
    </div>
 </div>
@endsection