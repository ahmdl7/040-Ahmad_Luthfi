<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create A Collection Data</title>
    @include("component/fonts_css")
</head>
<body>
@include("component/navbar-admin")

<section id="crud_collection">
    <div class="container">
      <h1>Create A Collection Data</h1>
      <form method="post" action="{{ route('collection.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Kode Produk</label>
          <input type="text" name="kode" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Harga</label>
          <input type="text" name="harga" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Jumlah Stok</label>
          <input type="text" name="stok" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
          <textarea class="form-control" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Upload Gambar</label>
          <br>
          <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</section>

@include("component/script")
</body>
</html>