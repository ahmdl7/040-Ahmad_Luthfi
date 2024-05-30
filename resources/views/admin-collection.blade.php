<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Gallery</title>
    @include("component/fonts_css")
</head>
<body>
@include("component/navbar-admin")

<section id="crud_collection">
    <div class="container">
      <h1>CRUD Collection</h1>
      <h5><a href="create-collection">Create</a></h5>
        @if(session()->has('success'))
            <div class="success-subtle">
                {{ session('success') }}
            </div>
        @endif

      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kode Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah Stok</th>
            <th scope="col">Deskripsi Produk</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($collection as $c)
          <tr>
            <th scope="row">{{ $c->id }}</th>
            <th scope="row">{{ $c->nama }}</th>
            <th scope="row">{{ $c->kode }}</th>
            <th scope="row">{{ $c->harga }}</th>
            <th scope="row">{{ $c->stok }}</th>
            <th scope="row">{{ $c->deskripsi }}</th>
            <td><img src="{{ asset('images/collections/' . $c->image) }}" alt="{{ $c->id }}" width="100"></td>
            <td><a href="{{ route('collection.edit', ['collection' => $c->id]) }}">Edit</a></td>
            <td><form action="{{ route('collection.delete', $c->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-primary">Delete</button>
          </form></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>

@include("component/script")
</body>
</html>