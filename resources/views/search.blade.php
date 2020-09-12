@extends("layout.layout")
@section("content")
    <section class="Mainbreadcrumb">
        <div class="container">
            <p>Home / Search</p>
        </div>
    </section>
    <section class="shopSection">
        <div class="container">
            <div class="row">
                <div class="col col-lg-5">
                    <h1 class="shopTitle mb-0">Search</h1>
                </div>
                <div class="col col-lg-7">
                    <form id="searchForm" action="{{route("search")}}">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <input class="form-control" placeholder="Enter Search Result" type="text" name="search"
                                       style="height: 100%;"/>
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-5" type="submit"
                                            style="border-radius: 0px;background-color: #171717;border: none;">search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="row product-row">
                        @if(sizeof($products) >= 1)
                            @foreach($products as $product)
                                <div class="col col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                                    <img class="img-fluid product-image"
                                         src="{{asset("storage/$product->image")}}" data-value="{{$product}}">
                                    <p class="product-title">{{$product->title}}</p>
                                    <p class="d-inline-block price-label">{{"N $product->price"}}</p>
                                </div>
                            @endforeach
                        @else
                            <h3>No Search Result</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
