@extends("layout.app")

@section("title","Index")

@section("main")
    <div class="container">
        <div class="row">
            <div class="card mb-3">
                <div class="row g-0 col-12">
                    <div class="col-md-4">
                        <img src="{{$comic->thumb }}" class="img-fluid rounded my-auto" alt="{{$comic-> title}}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic-> title}}</h5>
                            <h6>{{ $comic->type }}</h6>
                            <p class="card-text">{{ $comic->description}}</p>
                            <div class="card-text d-flex justify-content-evenly">
                                <div>
                                    <h6>Serie:</h6>
                                    <span>{{ $comic->series }}</span>
                                </div>
                                <div>
                                    <h6>Data di uscita:</h6>
                                    <span>{{ $comic->sale_date }}</span>
                                </div>
                                <div class="align-self-center" >
                                    <span>{{ $comic->price }}</span>
                                </div>
                            </div>
                            <p class="card-text">
                                <h6>Artists</h6>
                                <small class="text-body-secondary">{{$comic-> artists}}</small>
                                <h6>Writers</h6>
                                <small class="text-body-secondary">{{$comic-> writers}}</small>
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection