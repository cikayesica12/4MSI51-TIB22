@extends('layouts.template.main-admin')

@section('title', 'Contact Us Admin')

@section('container')
<head>

<!--Bootstrap Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>

<div class="container" style="padding-left: 11rem; padding-top: 1rem">

    <div class="row my-3">
        <div class="col-md">
            <h2 class="text=uppercase text-center fw-bold">Contact Us Data</h2>
        </div>
    </div>

    <div class="row my-5">
        <table class="table table-striped table-bordered" id="example1">
                        <thead align="center">
                            <tr>
                                <th>No</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse($contact_us as $f)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$f->nama_lengkap}}</td>      
                                <td>{{$f->email}}</td>    
                                <td>{{$f->phone}}</td>      
                                <td>{{$f->message}}</td> 
                                <td>
                                    <a href="{{ url("/contactusadmin/delete/$f->id") }}" class="btn btn-danger btn-sm" onclick="javascript:return confirm(`Are you sure want to delete this data ?`);" title="Delete">
                                        <i class="bi bi-trash3-fill" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @php $no++; @endphp
                            @empty
                            <tr>
                                <td colspan="6">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
            </table>
    </div>
    <br>
    {{$contact_us->links()}}
</div>

@endsection