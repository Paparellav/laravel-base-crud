@extends('layouts.app')

@section('content')
    <h1 class="mt-3"> Modifica Fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', ['comic' => $current_comic->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title') ? old('title') : $current_comic->title }}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb"
                value="{{ old('thumb') ? old('thumb') : $current_comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price"
                value="{{ old('price') ? old('price') : $current_comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series"
                value="{{ old('series') ? old('series') : $current_comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">In offerta</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date"
                value="{{ old('sale_date') ? old('sale_date') : $current_comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type"
                value="{{ old('type') ? old('type') : $current_comic->type }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description">{{ old('description') ? old('description') : $current_comic->description }}</textarea>
        </div>

    </form>
@endsection
