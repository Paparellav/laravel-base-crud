@extends('layouts.app')

@section('content')
    <h3>Dettagli del fumetto</h3>
    <ul>
        <li>
            <h3>
                {{ $current_comic->title }}
            </h3>
            <p>
                {{ $current_comic->description }}
            </p>
            <img src="{{ $current_comic->thumb }}" alt="{{ $current_comic->series }}">
            <p>
                Prezzo: {{ $current_comic->price }} euro
            </p>
            <p>
                {{ $current_comic->series }}
            </p>
            <p>
                In offerta dal: {{ $current_comic->sale_date }}
            </p>
            <p>
                {{ $current_comic->type }}
            </p>
            <div class="d-flex">
                <a class="btn btn-primary me-2"
                    href="{{ route('comics.edit', ['comic' => $current_comic->id]) }}">Update</a>

                <form action="{{ route('comics.destroy', ['comic' => $current_comic->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </li>
    </ul>
@endsection
