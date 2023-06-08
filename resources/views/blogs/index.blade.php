@extends ('layout')

@section ('content')

<div id='create'>
<button id='create' ><a href="{{ route('blogs.create') }}">Maak een Blog</a></button>
</div>


    @foreach($blogs as $blogs)
        <div id="myblogs">
            <div>
                <h2>
                    <a href = "{{ route('blogs.show', $blogs) }}">{{$blogs->titel}}</a>
                </h2>
            </div>



            <div id="blogsfoto" style="background: url('{{$blogs->img_url}}') center center; background-size: cover;">
    </div>

            <button><a href="/blogs/{{$blogs->id}}" class="button is-primary">Read more...</a></button>
            <button><a href="/blogs/{{$blogs->id}}/edit" class="button is-primary">Edit blog...</a></button>

        </div>
    @endforeach
@endsection
