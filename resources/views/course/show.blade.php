<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #EFF7FF;
            color: #333;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #FFFFFF;
        }
        .card-header {
            background-color: #0853A6;
            color: #FFFFFF;
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header text-white text-center">Course</h5>
                    <div class="card-body">    
                        <p class="card-text"><strong>Nama Course : </strong> {!! $course->nama_course !!}</p>
                        <p class="card-text"><strong>Nama Instansi Course : </strong> {!! $course->institusi_course !!}</p>
                        <p class="card-text"><strong>Tingkat Course : </strong> {!! $course->tingkat_course !!}</p>
                        <p class="card-text"><strong>Tahun Course : </strong> {!! $course->tahun_course !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>