@extends('mail.template')
@section('content')
    <p>Hello <span style="font-weight: bold">{{$name ?? 'test-name'}},</span></p>
    <p>You can set your new password in this link <a href="{{ $url ?? 'url' }}"> Click here.</a></p>
    <p>Thank you.</p>
    <p>Home University Team</p>
@endsection





