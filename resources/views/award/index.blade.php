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
                    <h3 class="text-center my-4">Form Award</h3>       
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('award.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Award</th>
                                <th scope="col">Nama Institusi Award</th>
                                <th scope="col">Tingkat Award</th>
                                <th scope="col">Tahun Award</th>
                                <th scope="col">Deskripsi Award</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($awards as $award)
                                <tr>
                                    <td>{{ $award->nama_award }}</td>
                                    <td>{{ $award->institusi_award }}</td>
                                    <td>{{ $award->tingkat_award }}</td>
                                    <td>{{ $award->tahun_award }}</td>
                                    <td>{{ $award->deskripsi_award }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('award.destroy', $award->id) }}" method="POST">
                                            <a href="{{ route('award.show', $award->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('award.edit', $award->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                          {{ $awards->links() }}
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