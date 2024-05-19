<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - SantriKoding.com</title>
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #EFF7FF;
        color: #000000;
    }
    .btn-custom {
        background-color: #0853A6;
        border: none;
        color: #FFFFFF;
    }
    .btn-custom:hover {
        background-color: #074b93;
    }
    .btn-warning-custom {
        background-color: #F68955;
        border: none;
        color: #FFFFFF;
    }
    .btn-warning-custom:hover {
        background-color: #e67842;
    }
    .card {
        border: #074b93;
        border-radius: 10px;
    }
    .form{
        border: 2px solid #FFDFD0;
        padding: 15px;
        margin-top: 10px;
        border-radius: 10px;
    }
    .form-group label {
        font-weight: bold;
        color: #0853A6;
    }
    .form-control {
        border-radius: 5px;
        border-color: #0853A6;
    }
    .form-control:focus {
        border-color: #F68955;
        box-shadow: none;
    }
    .container {
        padding-top: 50px;
    }
</style>
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <b><h1 class="text-left mb-4" style="color: #F68955;">Form Organization</h1></b>
                        <div class="form">
                        <form action="{{ route('organization.update', $organization->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nama Organisasi</label>
                                    <div class="col-sm-9">     
                                        <input type="text" class="form-control @error('nama_org') is-invalid @enderror" name="nama_org" value="{{ old('nama_org',$organization->nama_org) }}" placeholder="Masukkan Nama Instansi">   
                                    </div>  
                                </div> 
                                <!-- error message untuk nim -->
                                @error('nama_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Periode Organisasi</label>
                                    <div class="col-sm-9">  
                                        <input type="text" class="form-control @error('periode_org') is-invalid @enderror" name="periode_org" value="{{ old('periode_org',$organization->periode_org) }}" placeholder="Masukkan Tahun Periode Organisasi">      
                                    </div>  
                                </div> 
                                <!-- error message untuk periode_org -->
                                @error('periode_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Tautan/Website</label>
                                    <div class="col-sm-9">        
                                        <input type="text" class="form-control @error('link_org') is-invalid @enderror" name="link_org" value="{{ old('link_org',$organization->link_org) }}" placeholder="Masukkan Tautan/website Instansi">
                                    </div>  
                                </div> 
                                <!-- error message untuk link_org -->
                                @error('link_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Tingkat Organisasi</label>
                                    <div class="col-sm-9"> 
                                        <select class="selectpicker form-control" data-live-search="true" name="tingkat_org" value="{{ old('tingkat_org',$organization->tingkat_org) }}">
                                            <option selected disabled>Pilih Tingkat Award</option>
                                            <option value="Lokal" {{ $organization->tingkat_org == 'Lokal' ? 'selected' : '' }}>Lokal</option>
                                            <option value="Nasional" {{ $organization->tingkat_org == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                            <option value="Internasional" {{ $organization->tingkat_org == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                                        </select>       
                                    </div>  
                                </div> 
                                <!-- error message untuk tingkat_org -->
                                @error('tingkat_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Jenis Organisasi</label>
                                    <div class="col-sm-9">  
                                        <select class="selectpicker form-control" data-live-search="true" name="jns_org" value="{{ old('jns_org',$organization->jns_org) }}">
                                            <option selected disabled>Pilih Tingkat Award</option>
                                            <option value="Ormawa" {{ $organization->jns_org == 'Ormawa' ? 'selected' : '' }}>Ormawa (Organisasi Mahasiswa)</option>
                                            <option value="UKM" {{ $organization->jns_org == 'UKM' ? 'selected' : '' }}>UKM (Unit Kegiatan Mahasiswa)</option>
                                            <option value="LSM" {{ $organization->jns_org == 'LSM' ? 'selected' : '' }}>LSM (Lembaga Swadaya Masyarakat)</option>
                                            <option value="partai Politik" {{ $organization->jns_org == 'partai Politik' ? 'selected' : '' }}>partai Politik</option>
                                            <option value="Ormas" {{ $organization->jns_org == 'Ormas' ? 'selected' : '' }}>Ormas (Organisasi Masyarakat)</option>
                                            <option value="Profesi" {{ $organization->jns_org == 'Profesi' ? 'selected' : '' }}>Profesi</option>
                                            <option value="Lainnya" {{ $organization->jns_org == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                        </select>         
                                    </div>  
                                </div> 
                                <!-- error message untuk jns_org -->
                                @error('jns_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">        
                                        <input type="text" class="form-control @error('jabatan_org') is-invalid @enderror" name="jabatan_org" value="{{ old('jabatan_org',$organization->jabatan_org) }}" placeholder="Masukkan Jabatan Organisasi">
                                    </div>  
                                </div> 
                                <!-- error message untuk jabatan_org -->
                                @error('jabatan_org')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                                
                            <div class="d-flex justify-content-end mt-5">
                                <button type="reset" class="btn btn-md btn-warning-custom mr-2">RESET</button>
                                <button type="submit" class="btn btn-md btn-custom">UPDATE</button>
                            </div>
                        </form> 
                        </div>
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