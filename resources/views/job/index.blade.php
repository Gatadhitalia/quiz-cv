<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TracerStudy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include jQuery (diperlukan oleh toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Form Job</h3>       
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('job.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Instansi</th>
                                <th scope="col">Periode Masuk</th>
                                <th scope="col">Periode Keluar</th>
                                <th scope="col">Alamat Instansi</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Kota</th>                                
                                <th scope="col">Website</th>
                                <th scope="col">Jenis Pekerjaan</th>
                                <th scope="col">Jabatan</th>                                
                                <th scope="col">Deskripsi Jabatan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($jobs as $job)
                                <tr>
                                    <td>{{ $job->nama_job }}</td>
                                    <td>{{ $job->periode_masuk_job }}</td>
                                    <td>{{ $job->periode_keluar_job }}</td>
                                    <td>{{ $job->alamat_job }}</td>
                                    <td>{{ $job->prov_job }}</td>
                                    <td>{{ $job->kota_job }}</td>
                                    <td>{{ $job->link_job }}</td>
                                    <td>{{ $job->jns_job }}</td>
                                    <td>{{ $job->jabatan_job }}</td>
                                    <td>{{ $job->deskripsi_job }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('job.destroy', $job->id) }}" method="POST">
                                            <a href="{{ route('job.show', $job->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('job.edit', $job->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $jobs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Message with toastr
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = "{{ session('success') }}";
            var errorMessage = "{{ session('error') }}";

            if (successMessage) {
                toastr.success(successMessage, 'BERHASIL!'); 
            } else if (errorMessage) {
                toastr.error(errorMessage, 'GAGAL!'); 
            }
        });
    </script>


</body>
</html>