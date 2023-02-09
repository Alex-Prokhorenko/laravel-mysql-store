@extends('layouts.main')
@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{asset('images/work.png')}}" alt="" width="100" height="100">
        <h1 class="display-5 fw-bold">Laravel Fake store API</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">This site is not a real store. This is a way to practice sending requests to the server</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="https://github.com/Alex-Prokhorenko/laravel-mysql-store"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">View on GitHub</button></a>
                <a href="{{ route('show.docs') }}"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Documentation</button></a>
            </div>
        </div>
    </div>
@endsection
