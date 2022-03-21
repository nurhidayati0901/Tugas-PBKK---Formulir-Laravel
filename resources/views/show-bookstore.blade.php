<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore | index</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-color: #76b5c5">
    <!-- DataTales Example -->
    <div class="container">
        <div class="card mt-3">
            <div class="card-header py-3">
                <div class="center">
                    <h2>Daftar Stok Buku</h2>
                </div>
                <a href="/input-buku" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="text">Input buku</span>
                </a>
            </div>
            
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Cover Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>ISBN</th>
                                <th>Berat (kg)</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        @foreach ($books as $book)
                        <tbody>
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>
                                    @if($book->image)
                                        <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->judul }}" class="img-fluid mt-3">
                                    @endif
                                </td>
                                <td>{{ $book->judul }}</td>
                                <td>{{ $book->penulis }}</td>
                                <td>{{ $book->penerbit }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->berat }}</td>
                                <td>{{ $book->harga }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>