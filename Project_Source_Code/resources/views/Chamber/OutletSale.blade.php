<!DOCTYPE html>

<html>

<head>

   <title>ChamberQ - Outlet-Wise Sales Report</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />

   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />

<style>
    td{
        font-size: 13px;
    }
    </style>


</head>

<body>
@include('header');

<div class="Mat">
<div class="container">

   <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">

       <h4 class="text-white">ASE Sales Report - Monthly Data</h4>

</div>


   <div class="row justify-content-left">

       <div class="col-md-12">

           <br />

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">

                   <h4 class="card-title">Gondola Wise Sales Report</h4>
                   <div style="float:right">
                   <form action="{{route('SalebyMonth')}}" method="post">
                    {{csrf_field()}}
                   <select class="form-select" aria-label="Default select example" name="Month" id="Month">
                    <option selected>Select a Month</option>
                    
                    <option value="Jan'22">Jan'22</option>
                    <option value="Feb'22">Feb'22</option>
                    <option value="Mar'22">Mar'22</option>
                    <option value="Apr'22">Apr'22</option>
                    <option value="May'22">May'22</option>
                    <option value="Jun'22">Jun'22</option> 
                    <option value="Jul'22">Jul'22</option>
                    <option value="Aug'22">Aug'22</option>
                    <option value="Sept'22">Sept'22</option>
                    <option value="Oct'22">Oct'22</option>
                    <option value="Nov'22">Nov'22</option>
                    <option value="Dec'22">Dec'22</option>
                    <option value="Jan'23">Jan'23</option>
                    <option value="Feb'23">Feb'23</option>
                    <option value="Mar'23">Mar'23</option>
                    <option value="Apr'23">Apr'23</option>
                    </select>
                    
                    <button type="submit" class="btn btn-warning" Value='continue'>continue</button>
                </form>
</div>
               </div>

               <div class="card-body">
                   <div class="pull-right">
                       <a href="{{url('/SalesReport/export')}}" class="btn btn-success" style="margin-left:92%">Export</a>
                   </div>
                   <div class=" card-content table-responsive">

                       <table id="example" class="table table-striped table-bordered" style="width:100%">

                           <thead>
                           <th>..ASM_Expert..</th>
                           <th>.....ASE_Name.....</th>
                           <th>..ASE_Area..</th>
                           <th>Territory</th>
                           <th>Outlet_Code</th>
                           <th>......Outlet_Name......</th>
                           <th>Area</th>
                           <th>DB_Code</th>
                           <th>........DB_Name........</th>
                           <th>......DHCP_Name......</th>
                           <th>Contact_Number</th>
                           <th>.......SKU_Name.......</th>
                           <th>PCs</th>
						   <th>Value</th>
                           <th>Brand</th>
                           <th>Month</th>
                           </thead>

                      

                           @if(true)
                           @php
                           $sum = 0
                            @endphp
                           
                               @foreach($data as $row)
                               @php
                               $sum = $sum + (float)$row->Value 
                            @endphp
                              
                              <tbody>
                                   <tr>
                                       <td>{{ $row->ASM_Expert }}</td>
                                       <td>{{ $row->ASE_Name }}</td>
                                       <td>{{ $row->ASE_Area }}</td>
                                       <td>{{ $row->Territory }}</td>
                                       <td style="color:#190033;font-weight:bold;font-size:15px;">{{ $row->OutletCode }}</td>
                                       <td>{{ $row->OutletName }}</td>
                                       <td>{{ $row->Area }}</td>
                                       <td>{{ $row->DBCode }}</td>
                                       <td>{{ $row->DBName }}</td>
                                       <td>{{ $row->DHCPName }}</td>
                                       <td>{{ $row->ContactNumber }}</td>
                                       <td>{{ $row->SKUName }}</td>                                       
                                       <td>{{ $row->Pcs }}</td>
                                       <td>{{ $row->Value }}</td>
                                       <td>{{ $row->Brand }}</td>
                                       <td>{{ $row->Month }}</td>
                                       
                                   </tr>
                               @endforeach
                               
                           @endif

                           @if(empty($data))
                           <tr>
                                   <td colspan="20">No Sales Record in this Month</td>
                               </tr>         
                           @endif
                           
                           </tbody>
                       </table>
                       <span><a style="font-weight:bold">Total Sale:</a><a style="font-weight:bold;color:green"> {{$sum}}</a></span>
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>

</body>

</html>