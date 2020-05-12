
@extends('react.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

<h1>Home Work 9</h1>

                        <div id="home-work"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
