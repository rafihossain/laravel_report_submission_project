@extends('admin.master');

@section('content');

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-center text-success"> Report View Information</h3>
            <hr>
            <table class="table table-bordered table-striped table-hover text-center">
                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td>{{ $viewReport->id }}</td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{ $viewReport->name }}</td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>{{ $viewReport->address }}</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td>{{ $viewReport->phone }}</td>
                  </tr>
                  <tr>
                    <td>District</td>
                    <td>:</td>
                    <td>{{ $viewReport->district }}</td>
                  </tr>
                  <tr>
                    <td>NID</td>
                    <td>:</td>
                    <td><img src="{{ asset($viewReport->nid) }}" alt="nid_image" height="100" width="100"></td>
                  </tr>
                  <tr>
                    <td>Photo</td>
                    <td>:</td>
                    <td><img src="{{ asset($viewReport->photo) }}" alt="photo_image" height="100" width="100"></td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>:</td>
                    <td>{{ $viewReport->fee }}</td>
                  </tr>
                  <tr>
                    <td>User I'd</td>
                    <td>:</td>
                    <td>{{ $viewReport->email }}</td>
                  </tr>
            </table>
        </div>
    </div>
</div>

@endsection