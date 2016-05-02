@extends('index')

@section('pagename', 'Etusivu')

@section('title', $title)
@section('titleshow', $title)


@section('content')

	<!-- UPCOMING TOURNEYS TABLE -->
	@include('main/upcomingtournaments')


	@include('main/endedtournaments')











@endsection