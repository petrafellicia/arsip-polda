@extends('layouts.main')

@section('container')

@foreach ($mails as $mail)
<button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; color: white">
        <a href="/mails/{{ $mail["slug"] }}"> {{ $mail["title"] }}</a>
</button>
<!-- <button type="button" class="btn btn-primary btn-lg"></button> -->
  <!-- <h5>by : {{  $mail["author"] }}</h5>
  <h5>{{ $mail["body"] }}</h5> -->
@endforeach

@endsection