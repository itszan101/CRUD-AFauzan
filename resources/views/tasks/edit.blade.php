@extends('layout')

@section('title', 'Edit Tugas')

@section('content')
<form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-3">
  @csrf @method('PUT')
  <div>
    <label class="block">Judul</label>
    <input name="title" value="{{ $task->title }}" class="border p-2 w-full" required>
  </div>
  <div>
    <label class="block">Deskripsi</label>
    <textarea name="description" class="border p-2 w-full">{{ $task->description }}</textarea>
  </div>
  <div>
    <label>
      <input type="checkbox" name="is_done" value="1" {{ $task->is_done ? 'checked' : '' }}> Selesai
    </label>
  </div>
  <button class="bg-blue-500 text-white px-3 py-2 rounded">Update</button>
</form>
@endsection
