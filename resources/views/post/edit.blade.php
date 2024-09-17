<x-layout>
    <div>
        <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
        <form action="{{ route('posts.update',$post) }}" method="post">
            
            @csrf
            @method('PUT')

            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
            <button type="submit">Edit This Post</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</x-layout>