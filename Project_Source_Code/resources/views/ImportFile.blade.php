<!DOCTYPE html>
<html>
<head>
    <title>ChamberQ - Analytics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
        </div>
        <div class="card-body">
            <form action="{{ route('Dumpdata.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-primary">Import XL Data</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        List Of Users
                        <a class="btn btn-danger float-end" href="{{ route('Dumpdata.export') }}">Export XL Data</a>
                    </th>
                </tr>
                <tr>
                <th>ID</th>
                            <th>Area</th>
                            <th>Territory</th>
                            <th>DB_Code</th>
                            <th>DB_Name</th>
                            <th>Outlet_Code</th>
                            <th>SKU_Name</th>
                            <th>Pcs</th>
                            <th>Value</th>
                            <th>Outlet_Name</th>
                            <th>DHCP_Name</th>
                            <th>Address</th>
                            <th>Contact_Number</th>
                            <th>Brand</th>
                            <th>Month</th>
                </tr>
                @foreach($data as $row)
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
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>