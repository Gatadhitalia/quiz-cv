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
                        <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Course</label>
                                <input type="text" class="form-control @error('nama_course') is-invalid @enderror" name="nama_course" value="{{ old('nama_course',$course->nama_course) }}"placeholder="Masukkan Nama Course">
                            
                                <!-- error message untuk nama_course -->
                                @error('nama_course')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Institusi</label>
                                <input type="text" class="form-control @error('institusi_course') is-invalid @enderror" name="institusi_course" value="{{ old('institusi_course',$course->institusi_course) }}"placeholder="Masukkan Nama Institusi Course">
                            
                                <!-- error message untuk institusi_course -->
                                @error('institusi_course')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Tingkat Course</label>
                                <input type="text" class="form-control @error('tingkat_course') is-invalid @enderror" name="tingkat_course"value="{{ old('tingkat_course',$course->tingkat_course) }}"placeholder="Masukkan Tingkat Course">
                            
                                <!-- error message untuk tingkat_course -->
                                @error('tingkat_course')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tahun Course</label>
                                <input type="number" class="form-control @error('tahun_course') is-invalid @enderror" name="tahun_course" value="{{ old('tahun_course',$course->tahun_course) }}"placeholder="Masukkan Tahun Course">
                            
                                <!-- error message untuk tahun_course -->
                                @error('tahun_course')
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