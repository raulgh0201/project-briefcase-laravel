@extends('layouts.app')
@section('title')
Inicio
@endsection

@section('content')

<div class='container'>
    <h2>Create project</h2>

    @if(session('success'))
    <div class="message success">
        The Project was saved succesfully! You can see <a href="{{ route('showProject', ['projectId' => session('projectId')]) }}">it here</a>
    </div>
    @endif

    <form method='POST' action="{{ route('storeProject') }}" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="name">Project name</label><br>
            <input type="text" name="name" required minlength="6"><br>
        </p>

        <p>
            <label for="description">Project description</label><br>
            <textarea type="text" name="description" required pattern='[a-zA-z]+'></textarea> <br>
        </p>

        <p>
            <label for="category">Category</label><br>
            <input type="text" name="category" required><br>
        </p>

        <p>
            <label for="languages">Used languages</label><br>
            <textarea type="text" name="lang" required></textarea><br>
        </p>

        <p>
            <label for="year">Year</label><br>
            <input type="number" name="year" pattern="[0-9]+" required></input><br>
        </p>

        <p>
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="Upload image">
        </p>
        <p>
            <label for="image">Github Url</label>
            <input type="text" name="githubUrl"><br>
        </p>
        <p>
            <label for="image">Web url</label>
            <input type="text" name="webUrl"><br>
        </p>

        <input type="submit" value='Submit Data'>

    </form>
</div>

@endsection