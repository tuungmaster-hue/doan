@extends('index')
@section('title-user', 'Home')
@section('content-user')

    {{-- Banner carousel --}}
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('assets/img/banner_img_01.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with Bootstrap 5.
                                    Template from <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ... các carousel-item khác giữ nguyên ... --}}
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    {{-- Categories --}}
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>Excepteur sint occaecat cupidatat non proident.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('assets/img/category_img_01.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Watches</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('assets/img/category_img_02.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Shoes</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('assets/img/category_img_03.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Accessories</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>

    {{-- Featured Products --}}
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Products</h1>
                    <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="">
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">${{ number_format($product->price, 2) }}</li>
                                </ul>
                                <a href="" class="h2 text-decoration-none text-dark">
                                    {{ $product->name }}
                                </a>
                                <p class="card-text">
                                    {{ Str::limit($product->description, 80) }}
                                </p>
                                <p class="text-muted">Reviews ({{ rand(10, 100) }})</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
