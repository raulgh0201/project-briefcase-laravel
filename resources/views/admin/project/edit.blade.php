@extends('layouts.app')
@section('title')
Inicio
@endsection

@section('content')

<div class='container'>
    <h2>Edit project</h2>

    @if(session('success'))
    <div class="message success">
        The Project was saved succesfully! You can see <a href="{{ route('showProject', ['projectId' => session('projectId')]) }}">it here</a>
    </div>
    @endif

    <form method='POST' action="{{ route('updateProject', ['projectId' => $project->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <p>
            <label for="name">Project name</label><br>
            <input type="text" name="name" required minlength="6" value="{{ $project->name }}"><br>
        </p>

        <p>
            <label for="description">Project description</label><br>
            <textarea type="text" name="description" required pattern='[a-zA-z]+'>{{ $project->description }}</textarea> <br>
        </p>

        <p>
            <label for="category">Category</label><br>
            <input type="text" name="category" required value="{{ $project->category }}"><br>
        </p>

        <p>
            <label for="languages">Used languages</label><br>
            <textarea type="text" name="lang" required value="{{ $project->lang }}">{{ $project->lang }}</textarea><br>
        </p>

        <p>
            <label for="year">Year</label><br>
            <input type="number" name="year" pattern="[0-9]+" required value="{{ $project->year }}"></input><br>
        </p>

        <p>
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="Upload image" value="{{ $project->image }}">
        </p>

        <p>
            <label for="image">Github url</label>
            <input type="text" name="githubUrl" value="{{ $project->githubUrl }}"><br>
        </p>

        <p>
            <label for="image">Web url</label>
            <input type="text" name="webUrl" value="{{ $project->webUrl }}"><br>
        </p>

        <input type="submit" value='Submit Data'>

    </form>
</div>

@endsection