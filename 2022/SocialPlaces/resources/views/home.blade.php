@extends('layouts.app')
@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} - {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif











                    <div class="container">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Content</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>

            @foreach($showcontacts as $showcontact)
            <tr>
              <td> {{$showcontact->id}} </td>
              <td> {{$showcontact->name}} </td>
              <td> {{$showcontact->email}} </td>
              <td> {{$showcontact->gender}} </td>
              <td> {{$showcontact->content}} </td>
              <td> {{$showcontact->created_at}} </td>              
            </tr>
            @endforeach


        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Content</th>
                <th>Created at</th>
            </tr>
            </tbody>
    </table>
</div>












                    </div>
            </div>
        </div>
    </div>

</div>        









<script>
    $(document).ready(function() {
          $('#dataTable').DataTable();
    });
</script>



@endsection