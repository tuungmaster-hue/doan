@extends('index')
@section('title-user', $product->name)
@section('content-user')

<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <!-- ẢNH SẢN PHẨM -->
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>

            <!-- THÔNG TIN SẢN PHẨM -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{ $product->name }}</h1>
                        <p class="h3 py-2 text-success">${{ number_format($product->price, 2) }}</p>

                        <ul class="list-inline">
                            <li class="list-inline-item"><h6>Brand:</h6></li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{ $product->brand ?? 'N/A' }}</strong></p>
                            </li>
                        </ul>

                        <h6>Description:</h6>
                        <p>{{ $product->description }}</p>

                        <div class="row pb-3">
                            <div class="col d-grid">
                                
                                    <button type="submit" class="btn btn-success btn-lg">Add To Cart</button>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
