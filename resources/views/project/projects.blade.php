
@extends('layouts.app')
@section('title') 
    Inicio
@endsection

@section('content')

<div class="container">
    <h2>Proyectos</h2>

    @if(session('success'))
        <div class="message success">
        {{ session('success') }}
        </div><br>
    @endif

    <ul>
      @foreach ($projects as $project)
          <li class='project'>
            <a href="{{ route('showProject', ['projectId' => $project->id]) }}">
                <div class="image">
                    <img src="/img/projectImgs/{{ $project->image }}" alt="project-image">
                </div>
            </a>
            <div class="info">
                <h3>{{ $project->name }}</h3>
                <p>{{ $project->category }}</p>
                <p>{{ $project->lang }}</p>
            
                <div class="urls">
                    <?php if (!empty($project->githubUrl)): ?>
                        <div class='github-url'>
                            <a href="{{ $project->githubUrl }}" title="Haz click para ir a github">
                            <img src="/img/github-mark/github-mark.png" height='30px' width="30px" alt="github-icon">
                            </a>
                        </div>
                    <?php endif; ?>
                   
                    <?php if (!empty($project->webUrl)): ?>
                        <div class="website-url">
                            <a href="{{ $project->webUrl }}" title="Haz click para ir a la web del proyecto">
                                <img src="/img/website-icon.png" height='30px' width="30px" alt="web-icon">
                            </a>
                        </div>
                    <?php endif; ?>
		</div>
                
            </div>
              
          </li>
        @endforeach
        
    </ul>
</div>

@endsection

