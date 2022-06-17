@extends('layouts.template.main-admin')

@section('title', 'List Rental Admin')

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
<div class="row" style="margin-top: 3rem; width:100%; padding-left: 17rem" >
    <div class="col">
        <table class="table table-striped table-bordered" id="summary">
            <thead>
              <tr style="text-align: center">
                <th>Image</th>
                <th>Type Rental</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Status</th>
                <th>Check</th>
              </tr>
            </thead>
            <tbody>
              @foreach($listrentals as $listrentals)
                  <tr style="text-align: center">
                      <td><img src="{{asset('/uploadimage/'.$listrentals->imagevehicle)}}" class="card-img-top" alt="{{$listrentals->imagevehicle}}" width="20px" height="50px"></td>
                      <td>{{$listrentals->typerental}}</td>
                      <td>{{$listrentals->brand}}</td>
                      <td>{{$listrentals->price}}</td>
                      <td>{{$listrentals->status}}</td>
                      <td>
                        <a href="{{ url("listrental/destroy/$listrentals->id") }}" class="btn btn-danger btn-sm" onclick="javascript:return confirm(`Are you sure want to delete this data ?`);" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                        </a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection