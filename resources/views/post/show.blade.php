<x-layout>

    POST
    <!-- When there is no desire, all things are at peace. - Laozi -->
    {{$post->created_at->diffForHumans()}}
    <br><br/>
    {{$post->content}}

</x-layout>
