<x-layout>
    <div>
        <!-- An unexamined life is not worth living. - Socrates -->
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">All Posts</h1>
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                </div>
                @if ($posts->count())
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach ($posts as $post)
                            <div class="col card">
                                {{Str::words($post->content, 25)}}
                                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                <a href="{{ route('posts.show', $post) }}">View</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                @else
                    <p class="text-center">No posts yet. Come back later!</p>
                @endif
            </div>
        </div>
    </div>
</x-layout>

