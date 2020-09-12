@extends("layout.layout")
@section("content")
    <section id="blog-section">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col col-lg-10 offset-lg-1 mt-5">
                        <div class="mb-4"><img class="img-fluid" src="{{"storage/$post->image"}}"></div>
                        <div>
                            <p class="d-inline-block price-label">{{$post->created_at->diffForHumans()}}&nbsp;</p>
                            <h3 style="font-family: 'Poppins';">{{$post->title}}</h3>
                            <p>{{$post->body}}</p>
                            <p class="mt-3" style="color: rgba(51,51,51,.71);">by admin</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="laravel-paginator">
            {{$posts->onEachSide(3)->links()}}
        </div>
    </section>
@endsection
