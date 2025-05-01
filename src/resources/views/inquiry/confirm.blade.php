
@extends('inquiry.layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/Contact/confirm.css') }}">
@endsection

@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
     <form class="form" action="/inquiry/thanks" method="post">
    @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text_name">
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
               {{ $contact['gender_jp'] ?? '未選択' }}
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text_tel">
                <input type="tel" name="tel_area" value="{{ $contact['tel_area'] }}" readonly />
                <input type="tel" name="tel_local" value="{{ $contact['tel_local'] }}" readonly />
                <input type="tel" name="tel_number" value="{{ $contact['tel_number'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="bilding" name="bilding" value="{{ $contact['bilding'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ選択内容</th>
              <td class="confirm-table__text">
                {{ $contact['inquiry_type_jp'] ?? '選択されていません' }}
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容詳細</th>
              <td class="confirm-table__text">
                 <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
              </td>
            </tr>
          </table>
        </div>
        
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a name="correction" href="/inquiry" >修正</a>
          </div>
        </div>
      </div>
    </form>
    @endsection
