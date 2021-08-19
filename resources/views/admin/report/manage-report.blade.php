@extends('admin.master')

@section('content')
<h2 class="text-center text-success" id="deleteMassage">{{ Session::get('message') }}</h2>
<div class="card mb-4">
    <div class="card-header text-warning">
        <i class="fas fa-table me-1"></i>
        All Report Information
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>District</th>
                    {{-- <th>Photo</th> --}}
                    <th>Fee</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @php ($sum = 0)
                @php($i=1)
                @foreach ($reportAll as $report)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $report->name }}</td>
                        <td>{{ $report->address }}</td>
                        <td>{{ $report->phone }}</td>
                        <td>{{ $report->district }}</td>
                        {{-- <td><img src="{{ asset($report->photo) }}" alt="photo_image" height="100" width="100"></td> --}}
                        <td>{{ $total = $report->fee }}</td>
                        <td>
                            <a href="{{ route('view-report', ['id'=> $report->id ]) }}" class="btn btn-info" title="View Report">
                                <i class="fas fa-search-plus"></i>
                            </a>
                            <a href="{{ route('edit-report', ['id'=> $report->id ]) }}" class="btn btn-warning btn-xs"  title="Edit Report">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('delete-report', ['id'=> $report->id ]) }}" class="btn btn-danger btn-xs" title="Delete Report">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    
                    <?php $sum = $sum+$total; ?>
                @endforeach
            </tbody>
        </table>
        <hr>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <table class="table table-bordered table-striped table-hover bg-warning text-center">
                        <tr>
                            <th>Total : </th>
                            <td>{{ $sum }} TK</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection