@extends('layouts.dashboard')

@section('content')
    {{Form::select('size', $comunas)}}
@endsection
