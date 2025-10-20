@extends('layout')

@section('title', $task->title)

@section('content')
<p>{{ $task->description }}</p>
<a href="{{ route('tasks.index') }}" class="text-blue-600 block mt-4">← Kembali</a>
@endsection
