@extends('layout')

@section('content')

    <div id='create'>
        <h1>Edit blog {{$blogs->titel}}</h1>
    </div>

    <div id='edit'>
    <form method="POST" action="{{ route('blogs.update', $blogs->id) }}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="Title">Update Titel</label>

            <div class="control">
                <input class="input" type="text" name="title" id="title" value="{{$blogs->titel}}"></input>
            </div>
        </div>

        <div class="field">
            <label class="label" for="excerpt">Text</label>

            <div class="control">
                <textarea class="textarea" name="excerpt" id="excerpt">{{$blogs->text}}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="img_url">Afbeelding URL</label>

            <div class="control">
                <textarea class="textarea" name="img_url" id="img_url">{{$blogs->afbeelding}}</textarea>
            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Edit</button>
            </div>
        </div>

        <button id='terug'><a href="{{route('blogs.index') }}">Go back</a></button>

    </form>



</div>

    <form id='delete' method="POST" action="/blogs/{{ $blogs->id }}">
        @csrf
        @method('DELETE')
        <button id="blogbutton" type="submit">Delete</button>
    </form>

@endsection
