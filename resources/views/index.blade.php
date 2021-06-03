<x-layout>
  <x-slot name='title'>
    MY BBS
  </x-slot>
  <h1>MY BBS</h1>
  <ul>
    {{-- @foreach ($posts as $post)
      <li> {{ $post }} </li>         
    @endforeach --}}
    @forelse ($posts as $index => $post)
        <a href="{{ route('posts.show', $index) }}">
          <li> {{ $post }} </li>
        </a>
    @empty
        <li>  まだ！ポストがない </li>
    @endforelse
  </ul>
</x-layout>
