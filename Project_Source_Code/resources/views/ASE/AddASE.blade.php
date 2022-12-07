<!DOCTYPE html>
<html>
<head>
    <title>ASE List</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('header');
<div class="Mat">
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="col col-md-6">
				<a href="ASEList" class="btn btn-success btn-sm float-end">Show ASE List</a>
			</div></br>
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      ASE Register
      
    </div>
    <div class="card-body">
      <form name="ASE" id="ASE" method="post" >
       @csrf
     
        <div class="form-group">
          <label for="exampleInputEmail1">ASM Expert</label>
          <input type="text" id="ASM_Expert" name="ASM_Expert" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ASE_Name</label>
          <input type="text" id="ASE_Name" name="ASE_Name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ASE_Area</label>
          <input type="text" id="ASE_Area" name="ASE_Area" class="form-control" required="">
        </div>  
        <div class="form-group">
          <label for="exampleInputEmail1">Territory</label>
          <input type="text" id="Territory" name="Territory" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Outlet Code</label>
          <input type="text" id="OutletCode" name="OutletCode" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div></br></br></br></br>
</div>  
</body>
</html>