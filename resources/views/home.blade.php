@extends('layouts.app')

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

                        {{ __('You are logged in!') }}
                        @if (auth()->check())
                            @if (auth()->user()->user_type == 'volunteer')
                                <p>Welcome, Volunteer!</p>
                                <!-- Additional content for volunteers -->
                            @elseif(auth()->user()->user_type == 'organisation')
                                <p>Welcome, Organisation!</p>
                                <!-- Additional content for organisations -->
                            @endif
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
