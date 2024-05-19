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
                        <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Instansi</label>
                                <input type="text" class="form-control @error('nama_job') is-invalid @enderror" name="nama_job" value="{{ old('nama_job') }}" placeholder="Masukkan Nama Instansi">
                            
                                <!-- error message untuk nim -->
                                @error('nama_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Periode Masuk</label>
                                <input type="text" class="form-control @error('periode_masuk_job') is-invalid @enderror" name="periode_masuk_job" value="{{ old('periode_masuk_job') }}" placeholder="Masukkan Periode Masuk Mahasiswa">
                            
                                <!-- error message untuk periode_masuk_job -->
                                @error('periode_masuk_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Peride Keluar</label>
                                <input type="text" class="form-control @error('periode_keluar_job') is-invalid @enderror" name="periode_keluar_job" value="{{ old('periode_keluar_job') }}" placeholder="Masukkan Periode Keluar Mahasiswa">
                            
                                <!-- error message untuk periode_keluar_job -->
                                @error('periode_keluar_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat Instansi</label>
                                <input type="text" class="form-control @error('alamat_job') is-invalid @enderror" name="alamat_job" value="{{ old('alamat_job') }}" placeholder="Masukkan Alamat Instansi">
                            
                                <!-- error message untuk alamat_job -->
                                @error('alamat_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Provinsi</label>
                                <input type="text" class="form-control @error('prov_job') is-invalid @enderror" name="prov_job" value="{{ old('prov_job') }}" placeholder="Masukkan Provinsi Instansi">
                            
                                <!-- error message untuk prov_job -->
                                @error('prov_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kabupaten/Kota</label>
                                <input type="text" class="form-control @error('kota_job') is-invalid @enderror" name="kota_job" value="{{ old('kota_job') }}" placeholder="Masukkan Tautan/Website Instansi">
                            
                                <!-- error message untuk kota_job -->
                                @error('kota_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tautan/Website</label>
                                <input type="text" class="form-control @error('link_job') is-invalid @enderror" name="link_job" value="{{ old('link_job') }}" placeholder="Masukkan Kota/Kabupaten Instansi">
                            
                                <!-- error message untuk link_job -->
                                @error('link_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Pekerjaan</label>
                                <input type="text" class="form-control @error('jns_job') is-invalid @enderror" name="jns_job" value="{{ old('jns_job') }}" placeholder="Masukkan Jenis Jabatan">
                            
                                <!-- error message untuk link_job -->
                                @error('link_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jabatan Pekerjaan</label>
                                <input type="text" class="form-control @error('jabatan_job') is-invalid @enderror" name="jabatan_job" value="{{ old('jabatan_job') }}" placeholder="Masukkan Jabatan Pekerjaan">
                            
                                <!-- error message untuk jabatan_job -->
                                @error('jabatan_job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi Jabatan</label>
                                <input type="longtext" class="form-control @error('deskripsi_job') is-invalid @enderror" name="deskripsi_job" value="{{ old('deskripsi_job') }}" placeholder="Masukkan Jabatan Pekerjaan">
                            
                                <!-- error message untuk deskripsi_job -->
                                @error('deskripsi_job')
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