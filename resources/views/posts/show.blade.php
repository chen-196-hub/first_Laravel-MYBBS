<x-layout>
  <x-slot name="title">
      {{ $post->title }} - My BBS
  </x-slot>
  <div class="back-link">
    &laquo; <a href="{{ route('posts.index') }}">Back</a>
  </div>
  <h1> 
    <span> {{ $post->title }} </span>
    <a href=" {{ route('posts.edit' ,$post) }} ">[edit]</a>
  </h1>

  <div>
    {!! nl2br(e($post->body)) !!}
    {{-- {!! nl2br($post->body) !!} --}}
  </div>
</x-layout>

