@extends('user.layout.app')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pt-3">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{Auth::user()->name}}! <br>

                    <a href="/post/1">See Our Article</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
