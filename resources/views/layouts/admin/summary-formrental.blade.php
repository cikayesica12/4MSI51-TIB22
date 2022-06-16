@extends('layouts.template.main-admin')

@section('title', 'Summary Form Rental')

@section('container')
<div class="container" style="margin-left: 16rem; width: 80%">
    <h1 style="margin-top: 2rem;">EASY Rental Sumarry</h1>
    <table class="table table-striped table-bordered" id="summary">
      <thead>
        <tr style="text-align: center">
          <th>No</th>
          <th>Name</th>
          <th>ID Number</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Location</th>
          <th>Start Rental</th>
          <th>End Rental</th>
          <th>Check</th>
        </tr>
      </thead>
      <tbody>
        @foreach($formrentals as $formrentals)
            <tr style="text-align: center">
                <td>{{$formrentals->id}}</td>
                <td style="text-align: left">{{$formrentals->name}}</td>
                <td>{{$formrentals->identitynumber}}</td>
                <td>{{$formrentals->gender}}</td>
                <td>{{$formrentals->phone}}</td>
                <td>{{$formrentals->email}}</td>
                <td>{{$formrentals->location}}</td>
                <td>{{$formrentals->startrental}}</td>
                <td>{{$formrentals->endrental}}</td>
                <td><input type="checkbox" class="w-5 h-5" value="id-1"></td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection