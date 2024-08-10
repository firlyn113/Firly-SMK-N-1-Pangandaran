@extends(backpack_view('blank'))

@section('content')
<div class="container-fluid">
    <h4>Dashboard</h4>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="text-value">Users</div>
                    <div></div>
                    <a href="user" class="btn btn-light mt-3">Go to Users</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <div class="text-value">Category</div>
                    <div></div>
                    <a href="category" class="btn btn-light mt-3">Go to Category</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <div class="text-value">Section</div>
                    <div></div>
                    <a href="section" class="btn btn-light mt-3">Go to Section</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <div class="text-value">Profile</div>
                    <div></div>
                    <a href="profile" class="btn btn-light mt-3">Go to Profile</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">Layanan</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Layanan</th>
                                <th>Permohonan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($layanans as $layanan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $layanan->nama_layanan }}</td>
                                <td><a href="{{ url('admin/layanan/' . $layanan->id . '/edit') }}" class="btn btn-sm btn-success">Pilih</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection