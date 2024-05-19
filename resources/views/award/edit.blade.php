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
                        <form action="{{ route('award.update', $award->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Award</label>
                                <input type="text" class="form-control @error('nama_award') is-invalid @enderror" name="nama_award" value="{{ old('nama_award',$award->nama_award) }}"placeholder="Masukkan Nama Award">
                            
                                <!-- error message untuk nama_award -->
                                @error('nama_award')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Institusi</label>
                                <input type="text" class="form-control @error('institusi_award') is-invalid @enderror" name="institusi_award" value="{{ old('institusi_award',$award->institusi_award) }}"placeholder="Masukkan Nama Institusi Award">
                            
                                <!-- error message untuk institusi_award -->
                                @error('institusi_award')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Tingkat Award</label>
                                <input type="text" class="form-control @error('tingkat_award') is-invalid @enderror" name="tingkat_award"value="{{ old('tingkat_award',$award->tingkat_award) }}"placeholder="Masukkan Tingkat Award">
                            
                                <!-- error message untuk tingkat_award -->
                                @error('tingkat_award')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tahun Award</label>
                                <input type="number" class="form-control @error('tahun_award') is-invalid @enderror" name="tahun_award" value="{{ old('tahun_award',$award->tahun_award) }}"placeholder="Masukkan Tahun Award">
                            
                                <!-- error message untuk tahun_award -->
                                @error('tahun_award')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi Award</label>
                                <input type="text" class="form-control @error('deskripsi_award') is-invalid @enderror" name="deskripsi_award" value="{{ old('deskripsi_award',$award->deskripsi_award) }}"placeholder="Masukkan Jabatan Pekerjaan">
                            
                                <!-- error message untuk deskripsi_award -->
                                @error('deskripsi_award')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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