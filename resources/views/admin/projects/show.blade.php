@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>show</h3>
        <div class="image-box">
            <img src="{{ $projects->image }}">
        </div>
        <div class="card-body card-box">
            <h4>{{ $projects->title }}</h4>
            <h5>{{ $projects->description }}</h5>
            <a href="{{ $projects->link }}">
                <h5>{{ $projects->link }}</h5>
            </a>
            <p>{{ $projects->date }}</p>
            <p>{{ implode(', ', $projects->language) }}</p>
            <a href="{{ route('admin.projects.edit', $projects->id) }}"><i class="fa-solid fa-pen"></i></a>
            <form action="{{ route('admin.projects.destroy', $projects->id) }}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button class="btn"><i class="fa-solid fa-trash"></i></button>
            </form>
        </div>
    </div>
@endsection
