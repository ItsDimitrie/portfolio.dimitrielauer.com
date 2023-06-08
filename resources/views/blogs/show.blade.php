@extends ('layout');

@section('content')

<div id='content'>
    <h2>{{$blogs->titel}}</h2>

    <div id="article-image" style="background: url('{{$blogs->afbeelding}}') center center;">


     <h2>{{$blogs->text}}</h2>

    </div>

    <button id='terug'><a href="{{route('blogs.index') }}">Go back</a></button>
@endsection

