@extends('layouts.app1')
  
@section('title', 'Show Pre-Audit Users')
  
@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="Fname" class="form-control" placeholder="First Name" value="{{ $preaudits->Fname }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="Lname" class="form-control" placeholder="Last Name" value="{{ $preaudits->Lname }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email_address" class="form-control" placeholder="Email Address" value="{{ $preaudits->email_address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" name="Phone_number" class="form-control" placeholder="Phone Number" value="{{ $preaudits->Phone_number }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Roles</label>
            <input type="text" name="Role" class="form-control" placeholder="Roles" value="{{ $preaudits->Role }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $preaudits->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $preaudits->updated_at }}" readonly>
        </div>
    </div>
@endsection