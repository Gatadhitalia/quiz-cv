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
                        <form action="{{ route('internship.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Instansi</label>
                                <input type="text" class="form-control @error('nama_intern') is-invalid @enderror" name="nama_intern" value="{{ old('nama_intern') }}" placeholder="Masukkan Nama Instansi">
                            
                                <!-- error message untuk nama_intern -->
                                @error('nama_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Periode Masuk</label>
                                <input type="text" class="form-control @error('periode_masuk_intern') is-invalid @enderror" name="periode_masuk_intern" value="{{ old('periode_masuk_intern') }}" placeholder="Masukkan Bulan dan Tahun Periode Masuk Mahasiswa">
                            
                                <!-- error message untuk periode_masuk_intern -->
                                @error('periode_masuk_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Peride Keluar</label>
                                <input type="text" class="form-control @error('periode_keluar_intern') is-invalid @enderror" name="periode_keluar_intern" value="{{ old('periode_keluar_intern') }}" placeholder="Masukkan Bulan dan Tahun Periode Keluar Mahasiswa">
                            
                                <!-- error message untuk periode_keluar_intern -->
                                @error('periode_keluar_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat Instansi</label>
                                <input type="text" class="form-control @error('alamat_intern') is-invalid @enderror" name="alamat_intern" value="{{ old('alamat_intern') }}" placeholder="Masukkan Alamat Instansi">
                            
                                <!-- error message untuk alamat_intern -->
                                @error('alamat_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Provinsi</label>
                                <input type="text" class="form-control @error('prov_intern') is-invalid @enderror" name="prov_intern" value="{{ old('prov_intern') }}" placeholder="Masukkan Provinsi Instansi">
                            
                                <!-- error message untuk prov_intern -->
                                @error('prov_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kabupaten/Kota</label>
                                <input type="text" class="form-control @error('kota_intern') is-invalid @enderror" name="kota_intern" value="{{ old('kota_intern') }}" placeholder="Masukkan Tautan/Website Instansi">
                            
                                <!-- error message untuk kota_intern -->
                                @error('kota_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tautan/Website</label>
                                <input type="text" class="form-control @error('link_intern') is-invalid @enderror" name="link_intern" value="{{ old('link_intern') }}" placeholder="Masukkan Kota/Kabupaten Instansi">
                            
                                <!-- error message untuk link_intern -->
                                @error('link_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Pekerjaan</label>
                                <input type="text" class="form-control @error('jns_intern') is-invalid @enderror" name="jns_intern" value="{{ old('jns_intern') }}" placeholder="Masukkan Jenis Jabatan">
                            
                                <!-- error message untuk jns_intern -->
                                @error('jns_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jabatan Pekerjaan</label>
                                <input type="text" class="form-control @error('jabatan_intern') is-invalid @enderror" name="jabatan_intern" value="{{ old('jabatan_intern') }}" placeholder="Masukkan Jabatan Pekerjaan">
                            
                                <!-- error message untuk jabatan_intern -->
                                @error('jabatan_intern')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi Jabatan</label>
                                <input type="text" class="form-control @error('deskripsi_intern') is-invalid @enderror" name="deskripsi_intern" value="{{ old('deskripsi_intern') }}" placeholder="Masukkan Jabatan Pekerjaan">
                            
                                <!-- error message untuk deskripsi_intern -->
                                @error('deskripsi_intern')
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