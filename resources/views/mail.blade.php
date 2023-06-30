@extends('layouts.main')

@section('container')
<h1>{{ $mail["title"] }}"</h1>
<h5>{{ $mail["author"] }}"</h5>
<p>{{ $mail["body"] }}"</p>

<a href="/mails">Back to Mails</a>
@endsection