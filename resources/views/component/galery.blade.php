<section class="gallery">
    <div class="slideshow-container">
      @foreach ($gambar as $g)
      <div class="mySlides fade">
        <img src="{{ asset($g) }}" style="width: 100%" />
      </div>
      @endforeach
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </section>
