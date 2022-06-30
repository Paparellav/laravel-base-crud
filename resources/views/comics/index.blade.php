@extends('layouts.app')

@section('content')
    <h3>Lista dei fumetti:</h3>
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <h4>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        {{ $comic->title }}
                    </a>
                </h4>
                <p>
                    {{ $comic->series }}
                </p>
                <p>
                    {{ $comic->type }}
                </p>
            </li>
        @endforeach
    </ul>
@endsection
