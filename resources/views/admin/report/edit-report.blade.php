@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-warning">
                    <h4 class="text-center text-dark my-2">Edit Report Form</h4>
                </div>
                <div class="card-body">
                    <h2 class="text-center text-success" id="deleteMessage">{{ Session::get('message') }}</h2>
                    <form action="{{ route('update-report') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Name :</label>
                            <div class="col-md-8">
                                <input type="text" name="name" id="" class="form-control" value="{{ $editReport->name }}" />
                                <input type="hidden" class="form-control" value="{{ $editReport->id }}" name="id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Address :</label>
                            <div class="col-md-8">
                                <input type="text" name="address" id="" class="form-control" value="{{ $editReport->address }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Phone No :</label>
                            <div class="col-md-8">
                                <input type="number" name="phone" id="" class="form-control" value="{{ $editReport->phone }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">District :</label>
                            <div class="col-md-8">
                                <input type="text" name="district" id="" class="form-control" value="{{ $editReport->district }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">NID :</label>
                            <div class="col-md-8">
                                <input type="file" name="nid" id="" accept="image/*" />
                                <img src="{{ asset($editReport->nid) }}" alt="nid-photo" height="100" width="100" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Photo :</label>
                            <div class="col-md-8">
                                <input type="file" name="photo" id="" accept="image/*" />
                                <img src="{{ asset($editReport->photo) }}" alt="nid-photo" height="100" width="100" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Fee :</label>
                            <div class="col-md-8">
                                <input type="number" name="fee" id="" class="form-control" value="{{ $editReport->fee }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">User I'd :</label>
                            <div class="col-md-8">
                                <input type="email" name="email" id="" class="form-control" value="{{ $editReport->email }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Password :</label>
                            <div class="col-md-8">
                                <input type="password" name="password" id="" class="form-control" value="{{ $editReport->password }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Confirm Password :</label>
                            <div class="col-md-8">
                                <input type="password" name="confirm_password" id="" class="form-control" value="{{ $editReport->confirm_password }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-warning w-100" name="btn" value="Update Report Info" />
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection