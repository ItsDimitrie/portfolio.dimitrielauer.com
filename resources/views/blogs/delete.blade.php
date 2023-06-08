<form method="POST" action="{{ route('blogs.destroy', $blogs) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
