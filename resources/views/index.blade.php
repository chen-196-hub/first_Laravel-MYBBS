<x-layout>
  <x-slot name='title'>
    MY BBS
  </x-slot>
  <h1>MY BBS</h1>
  <ul>
    {{-- @foreach ($posts as $post)
      <li> {{ $post }} </li>         
    @endforeach --}}
    @forelse ($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}">
          <li> {{ $post->title }} </li>
        </a>
    @empty
        <li>  まだ！ポストがない </li>
    @endforelse
  </ul>
</x-layout>
