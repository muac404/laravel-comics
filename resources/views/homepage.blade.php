@extends("layouts.main")
@section('page-title')
    Homepage
@endsection

@section("page-content")
<section class="mt-5">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-2">
                <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                <h4>{{$comic["title"]}}</h4>
                <h5>{{$comic["price"]}}</h5>
            </div>
        @endforeach
        
    </div>
</section>

@endsection