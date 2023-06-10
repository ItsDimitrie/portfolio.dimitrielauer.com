@extends('layout')

@section('content')
    <div id='create'>
        <h1>Hello there, create a blog here!!</h1>
    </div>

    <form method="POST" action="{{route('blogs.index')}}">
        @csrf
        <div class="field">
            <label class="label" for="titel">Titel</label>

            <div class="control">
                <input class="input" name="titel" id="text" value="{{ old('titel') }}">

                @if ($errors->has('text'))
                    <p class="error">{{ $errors->first('text') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="text">Text</label>

            <div class="control">
                <input class="input" name="text" id="text" value="{{ old('text') }}">

                @if ($errors->has('text'))
                    <p class="error">{{ $errors->first('text') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="afbeelding">Afbeelding URL (Optioneel)</label>

            <div class="control">
                <input class="input" name="afbeelding" id="afbeelding" value="{{ old('afbeelding') }}">

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

        <button id='terug'><a href="{{route('blogs.index') }}">Go back</a></button>

    </form>

@endsection
