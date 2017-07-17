@extends('layouts.public')

@section('content')
    <div class="container">
        <h1>{{ config('domainNames.title') }}</h1>
        <h5>Page {{ $domains->currentPage() }} of {{ $domains->lastPage() }}</h5>
        <hr>
        <ul>
            @foreach ($domains as $domain)
                <li>
                    <a href="/domains/{{ $domain->name }}">{{ $domain->name }}</a>
                    <ul>
                        <li>{{ $domain->currency }} {{ $domain->price }}</li>
                        <li>{{ $domain->last_bought_date->format('M jS Y') }}</li>
                    </ul>
                </li>
            @endforeach
        </ul>
        <hr>
    </div>
@endsection