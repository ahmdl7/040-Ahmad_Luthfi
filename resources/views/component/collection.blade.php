<section
      class="collection d-flex flex-wrap justify-content-evenly my-3 mx-3 text-center"
    >
    @foreach ($products as $product)
      <div class="card" style="width: 18rem">
        <img
          src="{{ asset($product['image']) }}"
          class="card-img-top"
          alt="{{ $product['ket'] }}"
        />
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