<section
      class="container mx-0 collection row gy-5 justify-content-between text-center"
    >
    @foreach ($products as $product)
      <div class="card col-4" style="width: 15rem">
        <a href="/detail">
        <img
          src="{{ asset($product['image']) }}"
          class="card-img-top"
          alt="{{ $product['ket'] }}"
        /></a>
        <div class="card-body">
          <p>
            {{ $product['name'] }} <br />
            {{ $product['code'] }}<br />
            Rp. {{ number_format($product['price'], 0, ',', '.') }}
          </p>
        </div>
      </div>
    @endforeach
    </section>