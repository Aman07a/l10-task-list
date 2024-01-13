@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            @@ -12,4 +12,4 @@
            <div>There are no tasks!</div>
    @endforelse
    {{-- @endif --}}
@endsection
