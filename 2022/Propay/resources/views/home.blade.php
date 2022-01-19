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
                        <li>go to menu drop down - to add new create</li>
                        <li>view all contacts here</li>
                    </ul>                                       
                </div>


                <div class="card-body">

                get all contacts and display here... 

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
