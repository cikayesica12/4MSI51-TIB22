@extends('layouts.template.main')

@section('container')
<div class="container" id="listrental">
    <div class="row">
        @foreach($listrental as $listrental)
        <div class="col-3" id="listrentalcard">
            <div class="card" style="width: 15rem;">
                <img src="{{assett('/uploadimage'.$listrental->imagevehicle)}}" class="card-img-top" alt="{{$listrental->imagevehicle}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$listrental->brand}}</h5>
                        <p class="card-text">Type Rental : {{$listrental->typerental}}</p>
                        <p class="card-text">Price : Rp.{{$listrental->price}}\day</p>
                        <p class="card-text">Status : {{$listrental->status}} </p>

                        <a href="{{route('formrental.create')}}" class="btn btn-primary">Book</a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection