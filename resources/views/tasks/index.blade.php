@extends('layout')

@section('title', 'Daftar Tugas')

@section('content')
<a href="{{ route('tasks.create') }}" class="btn btn-blue">+ Tambah Tugas</a>

<ul class="task-list">
  @foreach($tasks as $task)
  <li class="task-item">
    <div>
      <a href="{{ route('tasks.show', $task) }}" 
         class="task-title {{ $task->is_done ? 'done' : '' }}">
         {{ $task->title }}
      </a>
    </div>
    <div>
      <a href="{{ route('tasks.edit', $task) }}" class="btn btn-yellow">Edit</a>
      <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
        @csrf @method('DELETE')
        <button class="btn btn-red">Hapus</button>
      </form>
    </div>
  </li>
  @endforeach
</ul>
@endsection
