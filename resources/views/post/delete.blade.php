<x-layout>
    <div>
        <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
        <form action="{{ route('posts.destroy',$post) }}" method="post">
            
            @csrf
            @method('DELETE')

            <textarea name="content" id="content" cols="30" rows="10" disabled>{{$post->content}}</textarea>
            <button type="submit">Delete This Post</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</x-layout>