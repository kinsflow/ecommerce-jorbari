@extends("layout.layout")
@section("content")
    <section class="Mainbreadcrumb">
        <div class="container">
            <p>Home / Shop</p>
        </div>
    </section>

    <section class="shopSection">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="shopTitle">Shop</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="productsTab">
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active px-4" role="tab"
                                   href="{{route("product")}}">
                                    <p class="mr-1">-</p>all</a>
                            </li>
                            @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link active px-4" role="tab"
                                       href="{{route("category_product", ["category_id" => encrypt($category->id)])}}">
                                        <p class="mr-1">-</p>{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <div class="row product-row">
                                    @foreach($products as $product)
                                        <div class="col col-lg-4 col-md-4 col-sm-6 col-12 text-center"><img
                                                class="img-fluid product-image"
                                                src="{{asset("storage/$product->image")}}">
                                            <p class="product-title">{{$product->title}}</p>
                                            <p class="d-inline-block price-label">{{$product->price}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col d-flex justify-content-center mt-5">--}}
{{--                <nav>--}}
{{--                    <ul class="pagination">--}}
{{--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="laravel-paginator">
            {{$products->onEachSide(3)->links()}}
        </div>
    </section>
@endsection
