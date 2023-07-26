@extends("layout.app")

@section("title","Create")

@section("main")
<div class="container">
    <div class="row col-12">
        <h1 class="text-center">Modifica i dati del fumetto</h1>
        <form action="{{ route('admin.comics.update'), ['id' => $user->id]}}" method="POST" class="card">
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $user->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" value="{{ $user->description }} ></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{ $user->thumb }}>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $user->price }}>
                </div>
                <div class="mb-3 col-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" value="{{ $user->series }}>
                </div>
                <div class="mb-3 col-6">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $user->sale_date }}>
                </div>
                <div class="mb-3 col-6">
                    <label for="type" class="form-label">Genere</label>
                    <input type="text" class="form-control" name="type" id="type" value="{{ $user->type }}>
                </div>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Disegnatori</label>
                <input type="text" class="form-control" name="artists" id="artists" value="{{ $user->artists }}>
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers" id="writers" value="{{ $user->writers }}">
            </div>
            <div class="mb-3 d-flex justify-content-around">
                <button class=" btn btn-primary w-25" type="submit"> Modifica</button> 
                <button class=" btn btn-warning w-25" type="reset" > Reset </button>
            </div>
        </form>
    </div>
</div>


@endsection