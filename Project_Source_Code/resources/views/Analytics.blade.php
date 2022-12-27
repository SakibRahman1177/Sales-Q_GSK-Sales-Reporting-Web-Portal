<!DOCTYPE html>
<html>
<head>
   <title>PHPSpreadsheet in Laravel</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />

   <style>
    td{
        font-size: 13px;
    }
    th{
        width: 20%;
        font-size: 16px;
    }
    </style>
</head>

<body>
@include('header');
<div class="Mat">
<div class="container">
   <div class="card-header bg-secondary dark bgsize-darken-4 dark card-header">
       <h4 style="color: white">Haleon | GSK Bangladesh Private Limited</h4>
   </div>
   <div class="row justify-content-centre" style="margin-top: 4%">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header bgsize-primary-4 white card-header">
                   <h4 class="card-title">Import Excel Data</h4>
               </div>
               <div class="card-body">
                   @if ($message = Session::get('success'))
                       <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>{{ $message }}</strong>
                       </div>
                       <br>
                   @endif

                   <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
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
                   <h4 class="card-title">Sales - Dump Data</h4>
               </div>
               <div class="card-body">
                   <div class="pull-right">
                       <a href="{{url('/Dumpdata/export')}}" class="btn btn-success" style="margin-left:92%">Export</a>
                   </div>
                   <div class=" card-content table-responsive">
                       <table id="example" class="table table-striped table-bordered" style="width:100%">
                       <div style="width:30%;">
                           <thead>
                           <th>ID</th>
                            <th>Area</th>
                            <th>Territory</th>
                            <th>DB_Code</th>
                            <th>......DB_Name......</th>
                            <th>Outlet_Code</th>
                            <th>......SKU_Name......</th>
                            <th>Pcs</th>
                            <th>Value</th>
                            <th>....Outlet_Name....</th>
                            <th>....DHCP_Name....</th>
                            <th>............Address............</th>
                            <th>Contact_Number</th>
                            <th>Brand</th>
                            <th>Month</th>
                           </thead>
                        </div>
                           <tbody>

                           @if(!empty($data) && $data->count())

                               @foreach($data as $row)
                               <div>
                                   <tr>
                                   <td>{{ $row->id }}</td>
                                    <td>{{ $row->Area }}</td>
                                    <td>{{ $row->Territory }}</td>
                                    <td>{{ $row->DBCode }}</td>
                                    <td>{{ $row->DBName }}</td>
                                    <td>{{ $row->OutletCode }}</td>
                                    <td>{{ $row->SKUName }}</td>
                                    <td>{{ $row->Pcs }}</td>
                                    <td>{{ $row->Value }}</td>
                                    <td>{{ $row->OutletName }}</td>
                                    <td>{{ $row->DHCPName }}</td>
                                    <td>{{ $row->Address }}</td>
                                    <td>{{ $row->ContactNumber }}</td>
                                    <td>{{ $row->Brand }}</td>
                                    <td>{{ $row->Month }}</td>
                                   </tr>
                                </div>
                               @endforeach

                           @else
                               <tr>
                                   <td colspan="20">There are no data.</td>
                               </tr>

                               @endif

                           </tbody>

                       </table>

                       {{ $data->links() }}

                   </div>
               </div>
           </div>
       </div>
   </div>
   </div>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

   <script>

       $(document).ready(function() {
           $('#example').DataTable();
       } );

   </script>
</body>
</html>