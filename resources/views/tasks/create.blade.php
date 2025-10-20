@extends('layout')

@section('title', 'Tambah Tugas')

@section('content')
<form action="{{ route('tasks.store') }}" method="POST" class="space-y-3">
  @csrf
  <div>
    <label class="block">Judul</label>
    <input name="title" class="border p-2 w-full" required>
  </div>
  <div>
    <label class="block">Deskripsi</label>
    <textarea name="description" class="border p-2 w-full"></textarea>
  </div>
  <button class="bg-green-500 text-white px-3 py-2 rounded">Simpan</button>
</form>
@endsection
