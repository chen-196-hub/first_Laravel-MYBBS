<x-layout>
  <x-slot name='title'>
    MY BBS
  </x-slot>
  <h1>
    <span>MY BBS</span>
    <a href=" {{ route('posts.create') }} ">[add]</a>
  </h1>
  <ul>
    {{-- @foreach ($posts as $post)
      <li> {{ $post }} </li>         
    @endforeach --}}
    @forelse ($posts as $post)
        <a href="{{ route('posts.show', $post) }}">
          <li> {{ $post->title }} </li>
        </a>
    @empty
        <li>  まだ！ポストがない </li>
    @endforelse
  </ul>
</x-layout>
