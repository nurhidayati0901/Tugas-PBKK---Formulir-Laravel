<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore | input-buku</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-color: #76b5c5">
    <div class="container">
        <div class="justify-content-center mt-4 card">
            <div class="row">
                <div class="col-lg-6">
                    <img src="/book.jpg" class="rounded mx-auto d-block top" alt="logo">
                    <h1 class="top-center">Form Input Buku</h1>
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <!-- form validasi -->
                        <form action="/input-buku" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="image">Pilih Gambar</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                @error('image')
                                  <div id="imageFeedback" class="invalid-feedback">Hanya dapat mengunggah berkas dengan format jpeg,jpg,png ukuran maksimum 2 MB</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input class="form-control @error('judul') is-invalid @enderror" type="text" id="judul" name="judul" value="{{ old('judul') }}">
                                @error('judul')
                                  <div id="judulFeedback" class="invalid-feedback">Harus berisi minimal 5 karakter</div>
                                @enderror
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="penulis">Penulis</label>
                                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" value="{{ old('penulis') }}">
                                    @error('penulis')
                                      <div id="penulisFeedback" class="invalid-feedback">Harus berisi minimal 5 karakter</div>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="penerbit">Penerbit</label>
                                    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" name="penerbit" value="{{ old('penerbit') }}">
                                    @error('penerbit')
                                      <div id="penerbitFeedback" class="invalid-feedback">Harus berisi minimal 5 karakter</div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn') }}">
                                @error('isbn')
                                  <div id="isbnFeedback" class="invalid-feedback">Harus berisi 13 karakter angka</div>
                                @enderror
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="berat">Berat</label>
                                    <input class="form-control @error('berat') is-invalid @enderror" type="double" id="berat" name="berat" value="{{ old('berat') }}">
                                    @error('berat')
                                      <div id="beratFeedback" class="invalid-feedback">Harus berisi nilai antara 2.50 s.d. 99.99</div>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-outline">
                                    <label class="form-label" for="harga">Harga</label>
                                    <input class="form-control @error('harga') is-invalid @enderror" type="text" id="harga" name="harga" value="{{ old('harga') }}">
                                    @error('harga')
                                      <div id="hargaFeedback" class="invalid-feedback">Field harga harus diisi</div>
                                    @enderror
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" value="Submit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>