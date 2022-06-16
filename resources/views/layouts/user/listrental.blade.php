@extends('layouts.template.main')

@section('title', 'List Rental')

@section('container')
<div class="container" id="listrental">
    <div class="row">
        @foreach($listrentals as $listrentals)
        <div class="col-3" id="listrentalcard">
            <div class="card" style="width: 15rem;">
                <img src="{{asset('/uploadimage/'.$listrentals->imagevehicle)}}" class="card-img-top" alt="{{$listrentals->imagevehicle}}" height="150px">
                    <div class="card-body">
                        <h5 class="card-title">{{$listrentals->brand}}</h5>
                        <p class="card-text">Type Rental : {{$listrentals->typerental}}</p>
                        <p class="card-text">Price : Rp.{{$listrentals->price}}\day</p>
                        <p class="card-text">Status : {{$listrentals->status}} </p>

                        <a href="{{route('formrental.create')}}" class="btn btn-primary">Book</a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection