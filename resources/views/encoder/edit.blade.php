@extends('layouts.app1')
  
@section('title', 'Edit Encoder Users')
  
@section('contents')
    <h1 class="mb-0">Edit Encoder Users</h1>
    <hr />
    <form action="{{ route('encoders.update', $encoders->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="Fname" class="form-control" placeholder="First Name" value="{{ $encoders->Fname }}" >
                @error('Fname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="Lname" class="form-control" placeholder="Last Name" value="{{ $encoders->Lname }}" >
                @error('Lname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email_address" class="form-control" placeholder="Email Address" value="{{ $encoders->email_address }}" >
                @error('email_address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" name="Phone_number" class="form-control" placeholder="Phone Number" value="{{ $encoders->Phone_number }}">
                @error('Phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col mb-3">
                <label class="form-label">Roles</label>
                <input type="text" name="Role" class="form-control" placeholder="Roles" value="{{ $encoders->Role }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection