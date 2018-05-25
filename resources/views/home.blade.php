@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                        </div>
                    @endif
                    <b>
                        {{ Auth::user()->name }}
                    </b>

                    You are logged in!<br>
                    Your data:<br>
                        {{ Auth::user()->name }}
                    <br>
                        {{ Auth::user()->email }}
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
