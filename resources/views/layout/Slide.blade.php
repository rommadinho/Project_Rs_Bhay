<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Pelatihan</title>
    <!-- CSS Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- Custom CSS -->
    <style>
        .owl-carousel .item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card-title {
            font-weight: bold;
            text-align: center;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .owl-carousel .item a {
            display: block;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pelatihan</h4>
                        
                        <!-- Carousel Section -->
                        <div class="owl-carousel owl-theme full-width" id="owl-carousel-basic">
                            <div class="item">
                                <a href="https://myskill.id/bootcamp/akuntansi-keuangan" target="_blank">
                                    <img src="{{ asset('storage/img/full.webp') }}" alt="Slide 1">
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://example.com/slide2" target="_blank">
                                    <img src="{{ asset('storage/img/Login_bg.jpg') }}" alt="Slide 2">
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://example.com/slide3" target="_blank">
                                    <img src="{{ asset('storage/img/Login_bg.jpg') }}" alt="Slide 3">
                                </a>
                            </div>
                        </div>
                        
                        <!-- Additional Info -->
                        <p class="text-muted mt-4">Well, it seems to be working now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            $('#owl-carousel-basic').owlCarousel({
                items: 1,
                loop: true,
                margin: 20,
                nav: true,
                navText: ['<i class="mdi mdi-chevron-left"></i>', '<i class="mdi mdi-chevron-right"></i>'],
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000
            });
        });
    </script>
</body>
</html>
