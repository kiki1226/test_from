@extends('inquiry.layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/Contact/indexa.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/inquiry/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <label for="inquiry_type">お名前：</label>
            <span class="form__label--required">＊</span>
            
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
            <input type="text" name="first_name" id="name" placeholder="例：山田" value="{{ old('first_name') }}"/>
            
            <input type="text" name="last_name" id="name" placeholder="例：太郎" value="{{ old('last_name') }}"/>
            </div>
            <div class="form__error">
              @error('first_name')
               {{ $message }} 
              @enderror
              @error('last_name')
               {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">     
                <div class="form__group-title">
                    <label for="inquiry_type">性別：</label>
                    <span class="form__label--required">＊</span>
                </div>
                <div class="form__group-content"> 
                  <div class="gender-select">
                        <input type="radio" id="gender_male" name="gender" value="male" checked value="{{ old('gender') }}"/>
                        <label for="gender_male">男性</label>
                        <input type="radio" id="gender_female" name="gender" value="female" value="{{ old('gender') }}"/>
                        <label for="gender_female">女性</label>
                        <input type="radio" id="gender_other" name="gender" value="other" value="{{ old('gender') }}"/>
                        <label for="gender_other">その他</label>
                  </div>
                  <div class="form__error">
                    @error('gender')
                    {{ $message }} 
                    @enderror
                  </div>
                </div>
         </div>
        <div class="form__group">
          <div class="form__group-title">
            <label for="inquiry_type">メールアドレス：</label>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
              @error('email')
               {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <label for="inquiry_type">電話番号：</label>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="tel" id="tel_area" name="tel_area" placeholder="例：0123" value="{{ old('tel_area') }}"/>
                  <span class="hyphen">-</span>
                <input type="tel" id="tel_local" name="tel_local" placeholder="例：234" value="{{ old('tel_local') }}"/>
                  <span class="hyphen">-</span>
                <input type="tel" id="tel_number" name="tel_number" placeholder="例：5678" value="{{ old('tel_number') }}"/>
              </div>
              <div class="form__error">
                @error('tel_area')
                {{ $message }} 
                @enderror
                @error('tel_local')
                {{ $message }} 
                @enderror
                @error('tel_number')
                {{ $message }} 
                @enderror
              </div>
          </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <label for="inquiry_type">住所：</label>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                   <input type="address" id="address" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>                  
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">    
          <div class="form__group-title">
                <label for="inquiry_type">建物名：</label>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="bilding" id="bilding" name="bilding" placeholder="例：千駄ヶ谷マンション" value="{{ old('bilding') }}" />
            </div>
          </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <label for="inquiry_type">お問い合わせの種類：</label>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                  <select id="inquiry_type" name="inquiry_type">
                    <option value="">選択してください</option>
                    <option value="delivery">商品のお届けについて</option>
                    <option value="service">商品の交換について</option>
                    <option value="trouble">商品のトラブルについて</option>
                    <option value="shop">ショップへのお問い合わせ</option>
                    <option value="other">その他</option>
                 </select>
                </div>
                <div class="form__error">
                @error('inquiry_type')
                 {{ $message }}
                @enderror
            </div>
            </div>
            
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="inquiry_type">お問い合わせ内容：</label>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                  <textarea name="content" id="content" placeholder="例：お問合せ内容をご記入ください" value="{{ old('content') }}"></textarea>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
  </div>
@endsection