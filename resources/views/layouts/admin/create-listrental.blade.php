@extends('layouts.template.main-admin')

@section('container')
<div class="container" style="padding-left: 25rem; padding-top: 1rem">
    <div class="row mb-3">
        <div class="col">
            <h3><b>Input Vehicle EASY Rental</b></h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('listrental.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row my-2">
                    <div class="col-3">
                        <label for="typerental">Type Rental</label>
                    </div>
                    <div class="col">
                        <select style="width: 75%" name="typerental" class="form-select-typerental" id="autoSizingSelect">
                            <option selected>-Select-</option>
                            <option value="car">Car</option>
                            <option value="bus">Bus</option>
                            <option value="minibus">Mini Bus</option>
                            <option value="wedding">Wedding Car</option>
                            <option value="boat">Boat</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3">
                        <label for="typerental">Brand Vehicle</label>
                    </div>
                    <div class="col">
                        <input style="width: 75%" name="brand" type="text" class="inputbrand" />
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3">
                        <label for="typerental">Price</label>
                    </div>
                    <div class="col">
                        <input style="width: 75%" name="price" type="number" class="inputprice" />
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3">
                        <label for="typerental">Status</label>
                    </div>
                    <div class="col">
                        <select style="width: 75%" name="status" class="form-select-typerental" id="autoSizingSelect">
                            <option selected>-Select-</option>
                            <option value="ready">Ready</option>
                            <option value="booked">Booked</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2 mb-4">
                    <div class="col-3">
                        <label for="typerental">Vehicle Image</label>
                    </div>
                    <div class="col">
                        <input style="width: 75%" name="imagevehicle" type="file" class="imagevehicle" />
                    </div>
                </div>
                <button type="sudmit" class="btn btn-primary">SUBMIT</button>
                <button type="reset" class="btn btn-primary">Clear</button>
            </form>
        </div>
    </div>
</div>
@endsection