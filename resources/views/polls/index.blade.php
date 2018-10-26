@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Polls</h1>
        <div id="polls">
        @foreach($polls as $poll)
           <h2>{{ $poll->name }}</h2>
           <h3>{{ $poll->description }}</h3>
        </div>
        @endforeach
@endsection
