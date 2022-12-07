<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
@include('header');
<div class="Mat">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Brand Wise Sales Report - SENSODYNE</b></div>
			<div class="col col-md-6">

			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
			<th>Id</th>
                           <th>Region</th>
                           <th>Area</th>
                           <th>Territory</th>
                           <th>DB Code</th>
                           <th>DB Name</th>
                           <th>Route Code</th>
						   <th>Route</th>
                           <th>SR Code</th>
                           <th>SR</th>
                           <th>Channel</th>
                           <th>Outlet Code</th>
                           <th>ASM Expert</th>
                           <th>ASE_Name</th>
                           <th>ASE_Area</th>
                           <th>Territory</th>
                           <th>Outlet Name</th>
						   <th>SKU Code</th>
                           <th>SKU Name</th>
                           <th>Channel</th>
                           <th>PCs</th>
						   <th>Value</th>
                           <th>Date</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
					<td>{{ $row->id }}</td>
                                       <td>{{ $row->Region }}</td>
                                       <td>{{ $row->Area }}</td>
                                       <td>{{ $row->Territory }}</td>
                                       <td>{{ $row->DBCode }}</td>
                                       <td>{{ $row->DBName }}</td>
                                       <td>{{ $row->RouteCode }}</td>
									   <td>{{ $row->Route }}</td>
                                       <td>{{ $row->SRCode }}</td>
                                       <td>{{ $row->SR }}</td>
                                       <td>{{ $row->Channel }}</td>
                                       <td>{{ $row->OutletCode }}</td>
                                       <td>{{ $row->ASM_Expert }}</td>
                                       <td>{{ $row->ASE_Name }}</td>
                                       <td>{{ $row->ASE_Area }}</td>
                                       <td>{{ $row->Territory }}</td>
                                       <td>{{ $row->OutletName }}</td>
									   <td>{{ $row->SKUCode }}</td>
                                       <td>{{ $row->SKUName }}</td>
                                       <td>{{ $row->Channel }}</td>
                                       <td>{{ $row->Pcs }}</td>
                                       <td>{{ $row->Value }}</td>
                                       <td>{{ $row->Date }}</td>
						
						
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>
</div>