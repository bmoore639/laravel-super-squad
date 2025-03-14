<?php
@extends('layouts.app')
@section('content')
<h2 class="text-2xl font-semibold">All Super heroes</h2>

 <ul>
@forelse($heroes as $hero)
<li class="mb-2">
{{ $hero->hero_name }}
</li>
@empty
<li>No tasks yet.</li>
@endforelse
</ul>
<div class="mt-4">
<a href="{{ route('tasks.create') }}"
class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
Create a New Superheroes
</a>
</div>
@endsection
