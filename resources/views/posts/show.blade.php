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
    <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post">
      @method('DELETE')
      @csrf
      <button class="btn">[X]</button>
    </form>
  </h1>

  <div>
    {!! nl2br(e($post->body)) !!}
    {{-- {!! nl2br($post->body) !!} --}}
    <script>
      'use strict';

      {
          document.getElementById('delete_post').addEventListener('submit', e => {
              e.preventDefault();

              if (!confirm('Sure to delete?')) {
                  return;
              }

              e.target.submit();
          });
      }
    </script>
  </div>
</x-layout>

