@extends('layouts.main')

@section('container')

@foreach ($mails as $mail)
  <h1><a href="/mails/{{ $mail["slug"] }}"> {{ $mail["title"] }}</a></h1>
  <h5>by : {{  $mail["author"] }}</h5>
  <h5>{{ $mail["body"] }}</h5>
@endforeach

@endsection