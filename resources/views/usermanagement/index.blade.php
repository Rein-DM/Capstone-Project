@extends('layouts.app1')
  
@section('title', 'User Management')
  
@section('contents')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('usermanagement.create') }}" class="btn btn-primary">Add User</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Roles</th>
                <th>Email Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($users->count() > 0)
                @foreach($users as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->role }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('usermanagement.show', $rs->id) }}" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="View Details">Detail</a>
                                <a href="{{ route('usermanagement.edit', $rs->id)}}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a>
                                <form action="{{ route('usermanagement.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')" data-toggle="tooltip" data-placement="top" title="Delete">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
            @endif
        </tbody>
    </table>
@endsection