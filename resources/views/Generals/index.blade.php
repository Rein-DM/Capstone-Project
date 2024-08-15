@extends('layouts.app1')
  
@section('title', 'General Fund')
  
@section('contents')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
<?php /*----------------------------------------Encoder-------------------------------------------------------*/ ?>

@if (Auth::user()->role=='Encoder')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('general.create') }}" class="btn btn-primary">Add General Funds</a>
    </div>
@endif
<?php /*----------------------------------------Admin-------------------------------------------------------*/ ?>

@if (Auth::user()->role=='Admin')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('general.create') }}" class="btn btn-primary">Add General Funds</a>
    </div>
@endif

    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover" id="example">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Date Received</th>
            <th>Obligation Request No.</th>
            <th>Disbursement Voucher No.</th>
            <th>Dept</th>
            <th>Payee</th>
            <th>Acct.Code (As per budget)</th>
            <th>Acct Name</th>
            <th>Net Dv Amount</th>
            <th>Particulars</th>
            <th>Status</th>
            <th>Transmitted to:</th>
            <th>Remarks</th>
            <th>Date Released</th>
            <th>Check Number</th>
            <th>Date Of Issuance</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($general->count() > 0)
                @foreach($general as $rs)
                <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->dateReceived }}</td>
                        <td class="align-middle">{{ $rs->Obligation }}</td>
                        <td class="align-middle">{{ date('Y-m-', strtotime($rs->created_at)) }} {{ $rs->Disbursement }}</td>
                        <td class="align-middle">{{ $rs->Dept }}</td>
                        <td class="align-middle">{{ $rs->Payee }}</td>
                        <td class="align-middle">{{ $rs->Code }}</td>
                        <td class="align-middle">{{ $rs->Name }}</td>
                        <td class="align-middle">{{ $rs->Netdv }}</td>
                        <td class="align-middle">{{ $rs->Particulars }}</td>
                        <td class="align-middle">{{ $rs->Status }}</td>
                        <td class="align-middle">{{ $rs->Transmittedto }}</td>
                        <td class="align-middle">{{ $rs->Remarks }}</td>
                        <td class="align-middle">{{ $rs->Released }}</td>
                        <td class="align-middle">{{ $rs->Check }}</td>
                        <td class="align-middle">{{ $rs->Issuance }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('general.show', $rs->id) }}" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="View Details">Detail</a>
                                @if (Auth::user()->role=='Encoder')
                                <a href="{{ route('general.edit', $rs->id)}}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a>
                                <form action="{{ route('general.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')"data-toggle="tooltip" data-placement="top" title="Delete">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                                @endif
                                
                                @if (Auth::user()->role=='Admin')
                                <a href="{{ route('general.edit', $rs->id)}}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a>
                                <form action="{{ route('general.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')"data-toggle="tooltip" data-placement="top" title="Delete">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else

            @endif
        </tbody>
    </table>
    <footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print',
                    'excel'
                ]
            } );
        } );
    </script>

    <!-- Include DataTables Buttons extension CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>

    <!-- Include ExcelJS library for Excel export -->
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    </footer>
@endsection