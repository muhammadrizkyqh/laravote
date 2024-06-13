<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SuaraTelkom</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/users/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/users/style.css') }}" />
</head>

<body>
    <div class="header container-fluid bg-white">
        <div id="menu-jk" class="nav-col text-white shadow-md mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-2 pb-2 align-items-center">
                        <img class="max-230 mt-2" src="{{ asset('images/users/LogoNav.png') }}" alt="Logo">
                        <a data-bs-toggle="collapse" data-bs-target="#menu"
                            class="float-end text-dark d-lg-none pt-1 ps-3"><i class="bi pt-1 fs-1 cp bi-list"></i></a>
                    </div>
                    <div id="menu" class="col-lg-6 d-none d-lg-block">
                        <ul class="float-end mul d-inline-block">
                            <li class="float-md-start px-4 pe-1 py-3">
                                <button class="btn fw-bold fs-8 btn-outline-primary px-5">Login</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl big-padding">
        <div class="row section-title">
            <h2 class="fs-4">Selamat datang di aplikasi TelkomSuara! </h2>
            <p>TelkomSuara hadir untuk memberikan kemudahan dalam proses pemilihan secara elektronik yang aman, cepat,
                dan transparan. Dengan teknologi canggih, kami memastikan setiap suara dihitung dengan akurat dan adil.
                Ayo bergabung dengan kami untuk menciptakan masa depan demokrasi digital yang lebih baik! </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                    <img class="rounded-pill shadow-md p-2" src="assets/images/testimonial/member-01.jpg"
                        alt="">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">James Anderson</h4>
                    <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                    <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas.
                        Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh
                        porttitor.</p>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary fw-bolder fs-8">Visi Misi</button>
                    <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Pilih</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">View Manifesto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="molist">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu nibh et felis interdum
                            accumsan. Pellentesque elit odio, interdum quis ante in, varius rhoncus orci.</li>
                        <li>Etiam laoreet dapibus ante at mollis. Morbi lobortis ultricies risus, in faucibus est
                            blandit eu. Nunc nec imperdiet elit.</li>
                        <li>Praesent eget massa finibus, placerat tortor sed, pretium justo. Aenean et lectus accumsan,
                            tincidunt metus sit amet, laoreet nunc.</li>
                        <li>In et tincidunt est. Sed neque sapien, ultricies a orci et, fringilla egestas nibh. Sed
                            luctus eros et erat suscipit fermentum.</li>
                        <li>Cras blandit orci quis purus placerat tincidunt. Nunc ullamcorper iaculis nibh, sed dapibus
                            dui lobortis nec.</li>
                        <li>Sed tristique ante ac rhoncus facilisis. Maecenas hendrerit velit a interdum convallis.
                            Vivamus tempus eu justo nec rutrum. Praesent sollicitudin interdum nisl, at sollicitudin
                            justo interdum vel</li>
                        <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Nunc eget orci maximus, tincidunt nulla molestie, porta nisi. Integer fringilla
                            lorem at lacinia iaculis. </li>
                        <li>Maecenas tempus libero laoreet est facilisis, vitae iaculis dui eleifend. Proin eget magna
                            vitae diam dictum interdum at at nulla. Fusce eu porttitor felis. Aenean pretium lacinia
                            nunc ut convallis.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="{{ asset('js/users/jquery-3.2.1.min.js') }}"></script>
<script src="assets/js/popper.min.js"></script>
<script src="{{ asset('js/users/bootstrap.bundle.min.js') }}"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="{{ asset('js/users/script.js') }}"></script>

</html>
