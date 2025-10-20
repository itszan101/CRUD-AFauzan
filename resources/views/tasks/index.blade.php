@extends('layout')

@section('title', 'Daftar Tugas')

@section('content')
<a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-3 py-2 rounded">+ Tambah Tugas</a>

<ul class="mt-4 space-y-2">
  @foreach($tasks as $task)
  <li class="border p-3 rounded flex justify-between">
    <div>
      <a href="{{ route('tasks.show', $task) }}" class="font-semibold">{{ $task->title }}</a>
      @if($task->is_done)
        <span class="text-green-600">(Selesai)</span>
      @endif
    </div>
    <div class="flex gap-2">
      <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-500">Edit</a>
      <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
        @csrf @method('DELETE')
        <button class="text-red-500">Hapus</button>
      </form>
    </div>
  </li>
  @endforeach
</ul>
@endsection
