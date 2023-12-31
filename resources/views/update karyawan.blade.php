<html>
<head>
    <title>Create Data Karyawan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
    <div class="container mt-4">
    @if (session('status'))
        <div class="alert alert-success"> 
            {{ session ('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Update Data Kaeyawan 
        </div>
        <div class="card-body">
            <form name="update-karyawan-form" id="update-karyawan-form" method="post" action="{{url('edit')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" class="form-control" required="" value="{{ $data->id }}" readonly> 
            </div>
            <div class="form-group">
                <label for="nim">NAMA</label>
                <input type="text" id="nama" name="nama" class="form-control" required="" value="{{ $data->nama }}">
            </div>
            <div class="form-group">
                <label for="nim">JABATAN</label>
                <input type="file" id="jabatan" name="jabatan" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="nim">ALAMAT</label>
                <input type="text" id="alamat" name="alamat" class="form-control" required="" value="{{ $data->alamat }}">
            </div>
            <div class="form-group">
                <label for="nim">UMUR</label>
                <input type="text" id="umur" name="umur" class="form-control" required="" value="{{ $data->umur }}">
            </div>
            <div class="form-group">
                <label for="nim">CREATED_AT</label>
                <textarea name="created_at" class="form-control" required=""> {{ $data->created_at }} </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body> 
</html>


