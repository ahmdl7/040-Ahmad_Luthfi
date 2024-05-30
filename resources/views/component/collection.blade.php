<h1 id="collection" class="ps-2 pb-3 heading">Our Collection</h1>
<section 
      class="collection row gy-5 justify-content-evenly text-center"
    >
    @foreach ($collection as $c)
      <div class="card col-3" style="width: 18rem">
        <a href="{{ route('detail', ['collection' => $c->id]) }}">
        <img
          src="{{ asset('images/collections/' . $c->image) }}"
          class="card-img-top"
          alt="{{ $c->id }}"
        /></a>
        <div class="card-body">
          <p>
            {{ $c->nama }} <br />
            {{ $c->kode }}<br />
            Rp. {{ number_format($c->harga, 0, ',', '.') }}
          </p>
        </div>
      </div>
    @endforeach
    </section>