@extends("layout.layout")
@section("content")
    <div class="container-fluid">
        <section id="homeJumb" class="d-flex align-items-center">
            <div>
                <p>from N23,000</p>
                <h1><strong>red collection</strong></h1>
                <button class="btn btn-primary" type="button">Shop now<span></span></button>
            </div>
        </section>
    </div>
    <section id="newItems">
        <div class="container">
            <h1 class="section-heading text-center">New items</h1>
            <p class="section-subTitle">our most recent Product from various collections</p>
            <div class="row product-row">
                @foreach($products as $product)
                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                        <img height="400" width="500" class="img-fluid product-image"
                             data-value="{{$product}}"
                             src="{{asset("storage/$product->image")}}"/>
                        <p class="product-title">{{$product->title}}</p>
                        <p class="d-inline-block price-label">{{"N $product->price"}}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
