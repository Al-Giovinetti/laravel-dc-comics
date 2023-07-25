@extends("layout.app")

@section("title","Index")

@section("main")
<div class="container">
    <div class="row m-0">
        @foreach($comics as $comic)
            <div class="card text-center col-4 p-0" id="index-card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="btn btn-primary me-2" href="#">Mostra</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success me-2" href="#">Modifica</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-warning me-2">Cancella</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> {{ $comic->title }} </h5>
                    <img src="{{$comic->thumb }}" class="img-fluid" alt="{{$comic->name }}">
                    <p class="card-text"> {{ $comic->type }}</p>           
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection