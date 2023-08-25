@extends('layouts.app')
@section('title')
Inicio
@endsection

@section('content')

@if(session('error'))
<div class="message error">
	The Project wasn't deleted
</div>
@endif

<div class="project-container">

	<div class="image">
		<!-- Blade Template -->
		<?php if (!empty($project->url)) : ?>
			<a href="{{ $project->url }}">
				<img src="/img/projectImgs/{{ $project->image }}" alt="project-image">
			</a>
		<?php else : ?>
			<img src="/img/projectImgs/{{ $project->image }}" alt="project-image">
		<?php endif; ?>
	</div>

	<div class="data">
		<h1>{{ $project->name }}</h1>
		<h3>{{ $project->category }}</h3>
		<h3>{{ $project->lang }}</h3><br>
		<p>{!! nl2br(e($project->description)) !!}</p><br>

		<div class="urls">
			<?php if (!empty($project->githubUrl)) : ?>
				<div class='github-url'>
					<a href="{{ $project->githubUrl }}" title="Haz click para ir a github">
						<img src="/img/github-mark/github-mark.png" height='30px' width="30px" alt="github-icon">
					</a>
				</div>
			<?php endif; ?>

			<?php if (!empty($project->webUrl)) : ?>
				<div class="website-url">
					<a href="{{ $project->webUrl }}" title="Haz click para ir a la web del proyecto">
						<img src="/img/website-icon.png" height='30px' width="30px" alt="web-icon">
					</a>
				</div>
			<?php endif; ?>
		</div>

	</div>
</div>

@endsection