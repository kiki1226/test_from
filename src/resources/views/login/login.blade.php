@extends('login.layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login/register.css') }}">
@endsection

@section('content')
  
 
<div class="from__content">
    <h1>Login</h1>
    <div class="container">
        <form action="/admin/contacts/index" method="post">
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group-bottom">
            <button type="submit" class="submit-button">ログイン</button>
            </div>
        </form>
    </div>
 </div>
</form>
@endsection