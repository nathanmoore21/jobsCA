@extends('layouts.app')

<!-- view is the user interface of the application -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an ordinary user!
                    <a href="{{ route('user.jobs.index')}}">View all Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
