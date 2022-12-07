@extends('layout')
@section('content')
<head>
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
    body{
  background-image: url("../images/bg.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;

}
</style>
  </head>

<body>
<div class="card push-top">

  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('ASE.ASEListEdit')}}">
      {{csrf_field()}}

      <div class="form-group">
              <label for="id">SL No.</label>
              <input type="text" class="form-control" name="id" value="{{ $data->id }}" readonly/>
          </div>
          <div class="form-group">
              <label for="ASM">ASM Expert</label>
              <input type="text" class="form-control" name="ASM_Expert" value="{{ $data->ASM_Expert }}"/>
          </div>
          <div class="form-group">
              <label for="ASE">ASE Name</label>
              <input type="text" class="form-control" name="ASE_Name" value="{{ $data->ASE_Name }}"/>
          </div>
          <div class="form-group">
              <label for="area">ASE Area</label>
              <input type="text" class="form-control" name="ASE_Area" value="{{ $data->ASE_Area }}"/>
          </div>
          <div class="form-group">
              <label for="territory">Territory</label>
              <input type="text" class="form-control" name="Territory" value="{{ $data->Territory }}"/>
          </div>
          <div class="form-group">
              <label for="outlet">Outlet Code</label>
              <input type="text" class="form-control" name="OutletCode" value="{{ $data->OutletCode }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Information</button>
      </form>
  </div>
</div><br><br>
  </body>
@endsection