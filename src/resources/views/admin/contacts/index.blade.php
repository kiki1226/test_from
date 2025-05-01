@extends('admin.layouts.app')

@section('content')
    <h1>顧客リスト</h1>

@include('admin.contacts.search')
<form action="{{ route('admin.contacts.index') }}" method="get">
        @csrf
    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>性別</th>
                <th>お問合せの種類</th>
                <th>日時</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->gender_jp }}</td>
                    <td>{{ $contact->inquiry_type_jp }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>
    {{ $contacts->links() }} {{-- ページネーション --}}
@endsection