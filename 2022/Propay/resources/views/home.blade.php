@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} - {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   
                    
                    <h5>//INSTRUCTIONS</h5>
                    <ul>
                        <li>go to menu drop down - to add new create contact => <a href="{{ route('contact') }}">{{ __('Contact Form') }}</a></li>
                        <li>view all contacts here => <a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    </ul>                                       
                </div>


                <h4 style="text-align:center;">View all Contact</h4>
                <div class="card-body">

                get all contacts and display here... 

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
