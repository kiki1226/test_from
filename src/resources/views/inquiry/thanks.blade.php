@extends('inquiry.layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/Contact/thanks.css') }}">
  <style>
    .thanks__content {
      position: relative;
      text-align: center; /* 必要に応じて */
      padding: 50px; /* 必要に応じて */
    }

    .thanks__content::before {
      content: "THANK YOU";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) rotate(-20deg);
      font-size: 10vw;
      font-weight: bold;
      color: rgba(0, 0, 0, 0.1);
      z-index: -1;
      white-space: nowrap;
    }

    .thanks__heading h2 {
      /* 見出しのスタイル */
    }

    .thanks__button {
      /* ボタンのスタイル */
    }
  </style>
@endsection

@section('content')
    
<form class="form" action="/inquiry/index" method="post">
  @csrf
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>お問い合わせありがとうございました。</h2>
      </div>
      <div class="thanks__button">
        <button class="button" type="submit">HOME</button>
      </div>
    </div>
</form>
@endsection
