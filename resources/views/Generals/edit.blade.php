@extends('layouts.app1')
  
@section('title', 'Edit General Funds')
  
@section('contents')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
  
    


    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                <hr />
                <form action="{{ route('general.update', $general->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Date Received</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="date" name="dateReceived" class="form-control" placeholder="dateReceived" value="{{ $general->dateReceived }}" title="Date Received" min="2020-01-01" 
                                        max="2030-01-01">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                            @error('dateReceived')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Obligation Request No.</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Obligation" class="form-control" placeholder="Obligation" value="{{ $general->Obligation }}" title="Obligation Request No.">
                                            <div class="form-control-icon">
                                                <i class="bi bi-list-ol"></i>
                                            </div>
                                            @error('Obligation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Disbursement Voucher No.</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Disbursement" class="form-control" placeholder="Disbursement" value="{{ $general->Disbursement }}" title="Disbursement Voucher No." readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-list-ol"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Department</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Dept" class="form-control" placeholder="Department" value="{{ $general->Dept }}" title="Department">
                                            <div class="form-control-icon">
                                                <i class="bi bi-door-closed"></i>
                                            </div>
                                            @error('Dept')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Payee</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Payee" class="form-control" placeholder="Payee" value="{{ $general->Payee }}" title="Payee">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            @error('Payee')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Account Code (As per budget)</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Code" class="form-control" placeholder="Code" value="{{ $general->Code }}" title="Account Code">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-badge-fill"></i>
                                            </div>
                                            @error('Code')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <label>Account Name</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Name" class="form-control" placeholder="Name" value="{{ $general->Name }}" title="Account Name">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-badge-fill"></i>
                                            </div>
                                            @error('Name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Net Dv Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="number" name="Netdv" class="form-control" placeholder="Netdv" value="{{ $general->Netdv }}" title="Net Dv Amount">
                                            <div class="form-control-icon">
                                                <i class="bi bi-cash-stack"></i>
                                            </div>
                                            @error('Netdv')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <label>Particulars</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Particulars" class="form-control" placeholder="Particulars" value="{{ $general->Particulars }}" title="Particulars">
                                            <div class="form-control-icon">
                                                <i class="bi bi-chat-right-text"></i>
                                            </div>
                                            @error('Particulars')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>Status</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <fieldset class="form-group">
                                                        <select class="form-select @error('Status') is-invalid @enderror" name="Status" id="Status" title="Status">
                                                            <option selected disabled>{{ $general->Status }}</option>
                                                            <option value="Released ">Released</option>
                                                            <option value="Returned with compliance ">Returned with compliance</option>
                                                            <option value="For DV ">For DV</option>
                                                            <option value="For Review ">For review</option>
                                                            <option value="Final approval">Final approval</option>
                                                        </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-people"></i>                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Transmitted to:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Transmittedto" class="form-control" placeholder="Transmittedto" value="{{ $general->Transmittedto }}" title=" Transmitted to">
                                            <div class="form-control-icon">
                                                <i class="bi bi-box-arrow-right"></i>
                                            </div>
                                            @error('Transmittedto')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Remarks</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="text" name="Remarks" class="form-control" placeholder="Remarks" value="{{ $general->Remarks }}" title="Remarks">
                                            <div class="form-control-icon">
                                                <i class="bi bi-chat-square-dots-fill"></i>
                                            </div>
                                            @error('Remarks')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Date Released</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="date" name="Released" class="form-control" placeholder="Released" value="{{ $general->Released }}" title="Date Released" min="2020-01-01" 
                                        max="2030-01-01">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-check-fill"></i>
                                            </div>
                                            @error('Released')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Check Number</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="number" name="Check" class="form-control" placeholder="Check" value="{{ $general->Check }}" title="Check Number">
                                            <div class="form-control-icon">
                                                 <i class="bi bi-card-checklist"></i>
                                            </div>
                                            @error('Check')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Date Of Issuance</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <input type="date" name="Issuance" class="form-control" placeholder="Issuance" value="{{ $general->Issuance }}" title="Date Of Issuance" min="2020-01-01" 
                                        max="2030-01-01">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-check-fill"></i>
                                            </div>
                                            @error('Issuance')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-12 d-flex justify-content-end">
                                <div class="row">
                                    <div class="d-grid">
                                        <button class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection