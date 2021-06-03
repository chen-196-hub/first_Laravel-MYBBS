<x-layout>
  <x-slot name="title">
      {{ $post->title }} - My BBS
  </x-slot>
  <div class="back-link">
    &laquo; <a href="{{ route('posts.index') }}">Back</a>
  </div>
  <h1> {{ $post->title }} </h1>
  <div>
    {!! nl2br($post->body) !!}
  </div>
</x-layout>

