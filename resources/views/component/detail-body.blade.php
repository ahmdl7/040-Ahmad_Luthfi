<a href="/index"><i class="fa-solid fa-backward p-3"> Back</i></a>
<div class="d-flex align-items-center vh-100">
<section
    id="details"
    class="konten d-flex flex-column flex-lg-row justify-content-evenly"
>
    <div class="produk d-flex justify-content-center w-50">
        <img
            src="{{ asset('images/collections/' . $collection->image) }}"
            alt="{{ $collection->id }}"
            srcset=""
            style="width: 55%"
        />
    </div>
    <div class="produk1 card" style="width: 35%">
        <div class="card-body">
            <h2>{{ $collection->nama }}</h2>
            <h4>{{ $collection->kode }}</h4>
            <h5>Harga</h5>
            <h4>Rp. {{ number_format($collection->harga, 0, ',', '.') }}</h4>
            <h5>Stok</h5>
            <h4>{{ $collection->stok }}</h4>
            <h5>Deskripsi Produk</h5>
            <p>{{ $collection->deskripsi }}</p>
            <div class="d-grid gap-2">
                <button
                    class="tombol"
                    style="
                        color: #ee4d2d;
                        background-color: white;
                        border: 1px solid #ee4d2d;
                        border-radius: 5px;
                        padding: 4.5px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    "
                    type="button"
                >
                    <a
                        href="https://www.shopee.co.id/"
                        class="t-link mx-5 px-5"
                        style="text-decoration: none; color: #ee4d2d"
                        >Beli di Shopee</a
                    >
                </button>
                <button class="btn btn-outline-success" type="button">
                    <a
                        href="https://www.tokopedia.com/"
                        class="text-success t-link mx-5 px-5"
                        style="text-decoration: none"
                        >Beli di Tokopedia</a
                    >
                </button>
                <button class="btn btn-outline-primary" type="button">
                    <a
                        href="https://www.blibli.com/"
                        class="text-success t-link mx-5 px-5"
                        style="text-decoration: none"
                        >Beli di Blibli</a
                    >
                </button>
            </div>
        </div>
    </div>
</section>
</div>