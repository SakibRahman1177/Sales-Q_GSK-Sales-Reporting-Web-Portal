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

       <h4 class="text-white">ASE Sales Report - Monthly Data</h4>

</div>


   <div class="row justify-content-left">

       <div class="col-md-12">

           <br />

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">

                   <h4 class="card-title">Gondola Wise Sales Report</h4>

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
                           <th>Outlet Name</th>
                           <th>Area</th>
                           <th>DB Code</th>
                           <th>DB Name</th>
                           <th>DHCP Name</th>
                           <th>Contact Number</th>
                           <th>SKU Name</th>
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
                                       <td>{{ $row->OutletCode }}</td>
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
                                       <td></td>
                                       
                                   </tr>
                               @endforeach
                               
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