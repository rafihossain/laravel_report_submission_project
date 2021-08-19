@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 rounded-lg mt-5">
                <div class="card-header bg-warning">
                    <h4 class="text-center text-dark my-2">Add Report</h4>
                </div>
                <div class="card-body">
                    <h2 class="text-center text-success" id="deleteMessage">{{ Session::get('message') }}</h2>
                    <form action="{{ route('save-report') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Name :</label>
                            <div class="col-md-8">
                                <input type="text" name="name" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Address :</label>
                            <div class="col-md-8">
                                <input type="text" name="address" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Phone No :</label>
                            <div class="col-md-8">
                                <input type="number" name="phone" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">District :</label>
                            <div class="col-md-8">
                                <input type="text" name="district" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('district') ? $errors->first('district') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">NID :</label>
                            <div class="col-md-8">
                                <input type="file" name="nid" id="" accept="image/*">
                                <span class="text-danger">{{ $errors->has('nid') ? $errors->first('nid') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Photo :</label>
                            <div class="col-md-8">
                                <input type="file" name="photo" id="" accept="image/*">
                                <span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Fee :</label>
                            <div class="col-md-8">
                                <input type="number" name="fee" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('fee') ? $errors->first('fee') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">User I'd :</label>
                            <div class="col-md-8">
                                <input type="email" name="email" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Password :</label>
                            <div class="col-md-8">
                                <input type="password" name="password" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4">Confirm Password :</label>
                            <div class="col-md-8">
                                <input type="password" name="confirm_password" id="" class="form-control">
                                <span class="text-danger">{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-warning w-100" name="btn" value="Save Report Info">
                            </div>
                        </div>
                    {{-- {{ Form::close() }}  --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection