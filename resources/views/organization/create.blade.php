<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('organization.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Organisasi</label>
                                <input type="text" class="form-control @error('nama_org') is-invalid @enderror" name="nama_org" value="{{ old('nama_org') }}" placeholder="Masukkan Nama Instansi">
                            
                                <!-- error message untuk nama_org -->
                                @error('nama_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Periode Organisasi</label>
                                <input type="text" class="form-control @error('periode_org') is-invalid @enderror" name="periode_org" value="{{ old('periode_org') }}" placeholder="Masukkan Tahun Periode Organisasi ">
                            
                                <!-- error message untuk periode_org -->
                                @error('periode_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Tautan/Website</label>
                                <input type="link" class="form-control @error('link_org') is-invalid @enderror" name="link_org" value="{{ old('link_org') }}" placeholder="Masukkan Kota/Kabupaten Instansi">
                            
                                <!-- error message untuk link_org -->
                                @error('link_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tingkat Organisasi</label>
                                <input type="text" class="form-control @error('tingkat_org') is-invalid @enderror" name="tingkat_org" value="{{ old('tingkat_org') }}" placeholder="Masukkan Jenis Jabatan">
                            
                                <!-- error message untuk tingkat_org -->
                                @error('tingkat_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Organisasi</label>
                                <input type="text" class="form-control @error('jns_org') is-invalid @enderror" name="jns_org" value="{{ old('jns_org') }}" placeholder="Masukkan Jenis Jabatan">
                            
                                <!-- error message untuk jns_org -->
                                @error('jns_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jabatan Organisasi</label>
                                <input type="text" class="form-control @error('jabatan_org') is-invalid @enderror" name="jabatan_org" value="{{ old('jabatan_org') }}" placeholder="Masukkan Jabatan Pekerjaan">
                            
                                <!-- error message untuk jabatan_org -->
                                @error('jabatan_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>