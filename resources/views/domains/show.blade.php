@extends('layouts.public')

<h1>{{ config('domainNames.title') }}</h1>

@section('content')
    <div class="container">
    <h1>{{ $domain->name }}</h1>
        <ul>
        @foreach ($domain as $key => $info)
            <li>{{ $key }} -> {{ $info[$key] }}</li>
        @endforeach
        </ul>
        <button class="btn btn-primary" onclick="history.go(-1)">
            « Back
        </button>
    </div>
@endsection
