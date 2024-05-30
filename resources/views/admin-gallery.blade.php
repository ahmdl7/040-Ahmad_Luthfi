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

<section id="crud_gallery">
    <div class="container">
      <h1>CRUD Gallery</h1>
        <h5><a href="create-gallery">Create</a></h5>
        @if(session()->has('success'))
            <div class="success-subtle">
                {{ session('success') }}
            </div>
        @endif

      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($gallery as $g)
          <tr>
            <th scope="row">{{ $g->id }}</th>
            <td><img src="{{ asset('images/gallery/' . $g->image) }}" alt="{{ $g->id }}" width="100"></td>
            <td><a href="{{ route('gallery.edit', ['gallery' => $g->id]) }}">Edit</a></td>
            <td><form action="{{ route('gallery.delete', $g->id) }}" method="POST">
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