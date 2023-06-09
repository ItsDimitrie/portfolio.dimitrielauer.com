@extends ('layout');

@section('content')

<div id='content'>
    <h1>{{$blogs->titel}}</h1>

    <h4>{{$blogs->text}}</h4>


    <div id="article-image" style="background: url('{{$blogs->afbeelding}}') center center;">
    </div>

    <button id='terug'><a href="{{route('blogs.index') }}">Go back</a></button>
@endsection

