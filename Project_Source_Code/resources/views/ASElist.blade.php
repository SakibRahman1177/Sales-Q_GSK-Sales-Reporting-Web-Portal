<!DOCTYPE html>

<html>

<head>

   <title>ASE List</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />

   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />




</head>

<body>
@include('header');

<div class="Mat">
<div class="container">

   <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">

       <h4 class="text-white">ASE List - Expert Marketing</h4>

   </div>
   

   <div class="row justify-content-centre" style="margin-top: 4%">

       <div class="col-md-8">

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">

                   <h4 class="card-title">Import</h4>

               </div>

               <div class="card-body">

                   @if ($message = Session::get('success'))

                       <div class="alert alert-success alert-block">

                           <button type="button" class="close" data-dismiss="alert">×</button>

                           <strong>{{ $message }}</strong>

                       </div>

                       <br>

                   @endif

                   <form action="{{url('history/ASEList')}}" method="post" enctype="multipart/form-data">

                       @csrf

                       <fieldset>

                           <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>

                           <div class="input-group">

                               <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">

                               @if ($errors->has('uploaded_file'))

                                   <p class="text-right mb-0">

                                       <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>

                                   </p>

                               @endif

                               <div class="input-group-append" id="button-addon2">

                                   <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Upload</button>

                               </div>

                           </div>

                       </fieldset>

                   </form>

               </div>

           </div>

       </div>

   </div>





   <div class="row justify-content-left">

       <div class="col-md-12">

           <br />

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">
               <div class="card-title">
				
                   <h4 class="card-title">
                    ASE-List Data Table<a href="add-ase-list" class="btn btn-success btn-sm float-end" style="float:right">Add</a>
                </h4>
                   
			</div>

               </div>

               <div class="card-body">

                   <div class=" card-content table-responsive">

                       <table id="example" class="table table-striped table-bordered" style="width:100%">

                           <thead>
                           <th>ASM Expert</th>
                           <th>ASE_Name</th>
                           <th>ASE_Area</th>
                           <th>Territory</th>
                           <th>Outlet Code</th>
                           <th colspan="2">Action</th>
                           </thead>

                           <tbody>

                           @if(!empty($data) && $data->count())

                               @foreach($data as $row)

                                   <tr>
                                       <td>{{ $row->ASM_Expert }}</td>
                                       <td>{{ $row->ASE_Name }}</td>
                                       <td>{{ $row->ASE_Area }}</td>
                                       <td>{{ $row->Territory }}</td>
                                       <td>{{ $row->OutletCode }}</td>
                                       <td><a href="/edit-ase-list-data/{{$row->id}}" class="btn btn-warning">Edit</a></td>
						            <td><a href="/destroy-ase-list-data/{{$row->id}}" class="btn btn-danger">Delete</a></td>
                                   </tr>
                               @endforeach
                           @else
                               <tr>
                                <td colspan="10">There are no data.</td>
                               </tr>
                           @endif
                           </tbody>
                       </table>
                       {!! $data->links() !!}

                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


 
</body>

</html>