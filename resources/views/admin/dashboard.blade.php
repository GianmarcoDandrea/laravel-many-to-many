@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div>
                    <h2>Hello {{ ucfirst(Auth::user()->name) }}! Welcome to your Project Portfolio</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
