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
      <form method="post" action="{{route('sensodyne.senEdit')}}">
      {{csrf_field()}}

      <div class="form-group">
              <label for="id">SL No.</label>
              <input type="text" class="form-control" name="id" value="{{ $data->id }}" readonly/>
          </div>
          <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" name="date" value="{{ $data->date }}"/>
          </div>
          <div class="form-group">
              <label for="month">Month</label>
              <input type="text" class="form-control" name="month" value="{{ $data->month }}"/>
          </div>
          <div class="form-group">
              <label for="url">URL</label>
              <input type="text" class="form-control" name="url" value="{{ $data->url }}"/>
          </div>
          <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" value="{{ $data->author }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Information</button>
      </form>
  </div>
</div><br><br>
  </body>
@endsection