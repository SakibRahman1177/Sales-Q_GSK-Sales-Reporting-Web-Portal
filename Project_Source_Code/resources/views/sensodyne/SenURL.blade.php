<!DOCTYPE html>
<html>
<head>
    <title>Brand Wise Report</title>
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
				<a href="show-ssd-post-data" class="btn btn-success btn-sm float-end">Show Data</a>
			</div></br>
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      BRAND WISE REPORT - SENSODYNE
      
    </div>
    <div class="card-body">
      <form name="SenURL" id="SenURL" method="post" action="{{url('store-ssd')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Date</label>
          <input type="date" id="date" name="date" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Month</label>
          <select name="month" id="month" class="form-control" required="">
            <option value="Jan">January</option>
            <option value="Feb">February</option>
            <option value="Mar">March</option>
            <option value="Apr">April</option>
            <option value="May">May</option>
            <option value="Jun">June</option>
            <option value="Jul">July</option>
            <option value="Aug">August</option>
            <option value="Sep">September</option>
            <option value="Oct">October</option>
            <option value="Nov">November</option>
            <option value="Dec">December</option>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">URL</label>
          <input type="url" id="url" name="url" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Author</label>
          <input type="text" id="author" name="author" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div></br></br></br></br>
</div>  
</body>
</html>