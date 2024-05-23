<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Details</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <style>
            .tombol:hover {
                background-color: #ee4d2d !important;
                border-color: #ee4d2d !important;
            }

            .t-link:hover {
                color: white !important;
            }

            @media screen and (max-width: 992px) {
                .konten {
                    display: flex !important;
                    justify-content: center !important;
                    align-items: center !important;
                }
                .produk {
                    width: 85% !important;
                }
                .produk1 {
                    width: 70% !important;
                }
            }
        </style>
    </head>
    <body class="d-flex align-items-center vh-100">
        <a
            class="icon-link icon-link-hover"
            style="--bs-link-hover-color-rgb: 25, 135, 84"
            href="#"
        >
            Icon link
            <svg class="bi" aria-hidden="true">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </a>
        <section
            id="details"
            class="konten d-flex flex-column flex-lg-row justify-content-evenly"
        >
            <div class="produk d-flex justify-content-center w-50">
                <img
                    src="img/glasses/CARRERA_CARBON_Sunglasses_AVIATOR_SCA8034010KU61_1200000005649-s.jpg"
                    alt=""
                    srcset=""
                    style="width: 60%"
                />
            </div>
            <div class="produk1 card" style="width: 30%">
                <div class="card-body">
                    <h2 class="pb-3">HUGO</h2>
                    <h5>Kode Produk</h5>
                    <h4 class="pb-3">FHU-1093O-IT55</h4>
                    <h5>Harga</h5>
                    <h4 class="pb-5">Rp. 1000000</h4>
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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
