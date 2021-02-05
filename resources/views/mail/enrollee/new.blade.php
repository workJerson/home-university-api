@extends('mail.template')
@section('content')
    <p>Hello <span style="font-weight: bold">{{$name ?? 'test-name'}}!</span></p>
    <p>You have successfully submitted your application to Home University.</p>
    <p>We will process your application and we'll get back to you once we completed the validation within 48 hours.</p>
    <p>Thank you!</p>
    <p>Home University Team</p>
@endsection





