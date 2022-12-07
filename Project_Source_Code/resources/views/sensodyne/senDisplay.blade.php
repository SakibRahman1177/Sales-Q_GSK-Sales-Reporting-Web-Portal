<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
@include('header');
<div class="Mat">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Brand Wise Sales Report - SENSODYNE</b></div>
			<div class="col col-md-6">
				<a href="add-ssd-post-form" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
			<th>SL No.</th>
				<th>Date</th>
				<th>Month</th>
				<th>URL</th>
				<th>Author</th>
				<th colspan="2">Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
					<td>{{ $row->id }}</td>
						<td>{{ $row->date }}</td>
						<td>{{ $row->month }}</td>
                        <td>{{ $row->url }}</td>
						<td>{{ $row->author }}</td>
						<td>
						<a href="/edit-ssd-post-data/{{$row->id}}" class="btn btn-warning">Edit</a></td>
						<td><a href="/destroy-ssd-post-data/{{$row->id}}" class="btn btn-danger">Delete</a></td>
						
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