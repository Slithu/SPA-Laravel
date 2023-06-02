@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('You are logged in!') }}</h4><br>

                    <img src="images/home.jpg" alt="home" style="margin-bottom: 4%; border-radius: 8px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
