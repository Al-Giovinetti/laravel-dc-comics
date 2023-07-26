@extends("layout.app")

@section("title","Index")

@section("main")
<div class="container">
    <div class="row col-5 mx-auto mb-3">
        <a href="{{ route('admin.comics.create') }}" class="btn btn-primary">Aggiungi un nuovo fumetto</a>
    </div>
    <div class="row m-0 d-flex justify-content-between">
        @foreach($comics as $comic)
            <div class="card text-center col-3 p-0 m-1" id="index-card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="btn btn-primary me-2" href="{{ route('admin.comics.show',$comic->id)}}">Mostra</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success me-2" href="{{ route('admin.comics.edit',$comic->id)}}">Modifica</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('admin.comics.destroy',$comic->id)}}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-warning me-2" type="submit">Elimina</a>
                            </form>
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