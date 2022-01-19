@extends('layouts.app')

@section('content')
<div class="container pt-5" style="max-width: 500px">

<!-- Alert User -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<form action="" method="post" action="{{ route('contact.save') }}">
    @csrf




<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name">

    <!-- Show error -->
    @if ($errors->has('name'))
        <div class="alert alert-danger">
            {{ $errors->first('name') }}
        </div>
    @endif
</div>





<div class="form-group">
    <label>Surname</label>
    <input type="text" class="form-control" name="surname" id="surname">

    <!-- Show error -->
    @if ($errors->has('surname'))
        <div class="alert alert-danger">
            {{ $errors->first('surname') }}
        </div>
    @endif
</div>




<div class="form-group">
    <label>South African ID Number</label>
    <input type="text" class="form-control" name="idno" id="idno">

    <!-- Show error -->
    @if ($errors->has('idno'))
        <div class="alert alert-danger">
            {{ $errors->first('idno') }}
        </div>
    @endif
</div>




<div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" id="phone">

    <!-- Show error -->
    @if ($errors->has('phone'))
        <div class="alert alert-danger">
            {{ $errors->first('phone') }}
        </div>
    @endif                                
</div>





<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="email">

    <!-- Show error -->
    @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
    @endif                
</div>




<div class="form-group">
    <label>Date of Birth</label>
    <input type="text" class="form-control" name="dob" id="dob">

    <!-- Show error -->
    @if ($errors->has('dob'))
        <div class="alert alert-danger">
            {{ $errors->first('dob') }}
        </div>
    @endif
</div>



<div class="form-group">
    <label>Language (Single Selection)</label>
    <select class="form-control" name="language" id="language">
        <option>Afrikaans</option>
        <option>English</option>
        <option>German</option>  
        <option>Chinese</option>
        <option>Latin</option>
        <option>French</option>                        
    </select>


    <!-- Show error -->
    @if ($errors->has('language'))
        <div class="alert alert-danger">
            {{ $errors->first('language') }}
        </div>
    @endif
</div>




<div class="form-group">
    <label>Interests (Multiple Selection)</label>
    <input type="text" class="form-control" name="interests" id="interests">

    <!-- Show error -->
    @if ($errors->has('interests'))
        <div class="alert alert-danger">
            {{ $errors->first('interests') }}
        </div>
    @endif
</div>





    <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
</form>
</div>
@endsection






