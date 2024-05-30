<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Gallery</title>
    @include("component/fonts_css")
</head>
<body>
@include("component/navbar-admin")

<section id="crud_gallery">
    <div class="container">
      <h1 class="p-3">Create A Gallery</h1>
      <form method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
        @csrf
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