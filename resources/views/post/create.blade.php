<x-layout>
    <div>
        <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
        <form action="{{ route('posts.store') }}" method="post">
            
            @csrf

            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <button type="submit">Create Post</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</x-layout>