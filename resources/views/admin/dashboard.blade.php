@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card text-bg-secondary mb-3">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2 class="text-center">Hello {{ $user->name }}! Welcome to your personal project portfolio</h2>
                        <h3 class="mt-5">Here's your details:</h3>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-bg-secondary mb-3">
                                <span class="fw-bold ">Email: </span>{{ $user->email }}
                                
                           </li>
                
                            <li class="list-group-item text-bg-secondary mb-3">
                                <span class="fw-bold ">Address: 
                                </span>{{ $user->userDetail ? $user->userDetail->address : 'No address available' }}
                            </li>
                
                            <li class="list-group-item text-bg-secondary mb-3">
                                <span class="fw-bold ">Email: </span> {{ $user->email }}
                            </li>
                 
                            <li class="list-group-item text-bg-secondary mb-3 ">
                                <span class="fw-bold">Phone Number: </span> {{ $user->userDetail ? $user->userDetail->phone : 'No phone available' }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection