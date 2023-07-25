@extends("layout.app")

@section("title","Create")

@section("main")
<div class="container">
    <div class="row col-12">
        <form action="">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input class="form-control" type="file" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" id="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" name="sale_date" id="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" name="type" id="type">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Disegnatori</label>
                <input type="text" name="artists" id="artists">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" name="writers" id="writers">
            </div> 
        </form>
    </div>
</div>


@endsection