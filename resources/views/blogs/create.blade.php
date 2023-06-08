@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="{{route('blogs.index')}}">
        @csrf
        <div class="field">
            <label class="label" for="titel">Titel</label>

            <div class="control">
                <input class="input" type="text" name="titel" id="titel" value="{{ old('titel') }}">

                @if ($errors->has('titel'))
                <p class="error">{{ $errors->first('titel') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="text">Text</label>

            <div class="control">
                <input class="textarea" name="text" id="text" value="{{ old('text') }}">

                @if ($errors->has('text'))
                    <p class="error">{{ $errors->first('text') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="afbeelding">afbeelding</label>

            <div class="control">
                <input class="textarea" name="afbeelding" id="afbeelding" value="{{ old('afbeelding') }}">

                @if ($errors->has('afbeelding'))
                    <p class="error">{{ $errors->first('afbeelding') }}</p>
                @endif

            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection
