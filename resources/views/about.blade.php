@extends('layouts.app')

@section('title')
Sobre mi
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slider').bxSlider({
            auto: true,
            responsive: true,
            stopAutoOnClick: true,
            touchEnabled: false,
            adaptiveHeight: true

        });
    });
</script>
@endsection
@section('content')
<div class="slider">
    <div id="title" class="flex-container">
        <div class="left-content">
            <h1>Raul Garcia</h1>
            <h2>Desarrollador web backend</h2>
            <img src="/img/about-me/me.png" alt="php-image">
        </div>
        <article class="about flex-container">
            <h2>Mi principal stack de desarrollo</h2>
            <img class='stack' src="/img/about-me/stack-icons/php.png" alt="php-image">
            <img class='stack' src="/img/about-me/stack-icons/laravel.png" alt="laravel-image">
            <img class='stack' src="/img/about-me/stack-icons/mysql.png" alt="mysql-image">
            <img class='stack' src="/img/about-me/stack-icons/html.png" alt="html-image">
            <img class='stack' src="/img/about-me/stack-icons/css.png" alt="css-image">
            <img class='stack' src="/img/about-me/stack-icons/js.png" alt="js-image">
            <img class='stack' src="/img/about-me/stack-icons/git.png" alt="git-image">
            <img class='stack' src="/img/about-me/stack-icons/vscode.png" alt="vscode-image">
            <h2>Otros lenguajes y tecnologias que he usado</h2>
            <img class='stack' src="/img/about-me/stack-icons/wordpress.png" alt="wordpress-image">
            <img class='stack' src="/img/about-me/stack-icons/shopify.png" alt="shopify-image">
            <img class='stack' src="/img/about-me/stack-icons/prestashop.png" alt="prestashop-image">
            <img class='stack' src="/img/about-me/stack-icons/angular.png" alt="angular">
            <img class='stack' src="/img/about-me/stack-icons/jquery.png" alt="jquery-image">
            <img class='stack' src="/img/about-me/stack-icons/sql.png" alt="sql-image">
            <img class='stack' src="/img/about-me/stack-icons/ts.png" alt="ts-image">
            <img class='stack' src="/img/about-me/stack-icons/java.png" alt="java-image">
            <img class='stack' src="/img/about-me/stack-icons/nodejs.png" alt="nodejs-image">
            <img class='stack' src="/img/about-me/stack-icons/photoshop.png" alt="photoshop-image">
        </article>
    </div>
    <div id="title">
        <section class="about">
            <h1>Sobre mí</h1><br><br>
            <p>Desde pequeño, siempre me ha
                apasionado el mundo de la informática y la tecnología, lo
                que me llevó a estudiar y adquirir conocimientos en esta
                área.<br><br>
                Me apasiona la búsqueda de problemas y su resolución,
                y por eso me estoy formando para convertirme en un
                programador web backend especializado en Laravel.
                Mi curiosidad innata me ha impulsado a explorar y
                descubrir nuevas formas de resolver problemas, lo que
                me ha llevado a desarrollar habilidades en la búsqueda
                de soluciones y en la resolución de problemas de
                manera efectiva.<br><br>
                Estoy comprometido con la excelencia en el trabajo, y
                siempre busco aprender y actualizarme en las últimas
                tendencias y tecnologías de mi campo.
            </p>
            @include('includes.follow')

        </section>
    </div>
</div>

<article class='projects'>
    <h2>Algunos de mis proyectos</h2><br><br>
    <ul>
        <li class='project'>
            <a href="{{ route('showProject', 1) }}">
                <div class="image">
                    <img src="/img/projectImgs/crm-integratedtools.png" alt="crm-integratedtools-project-image">
                </div>
            </a>

            <div class="info">
                <h2>CRM IntegratedTools</h2>
                <h3>backend, frontend</h3>
                <h4>php, css, html, laravel</h4>
                <p>CRM realizado como proyecto final de ciclo superior de desarrollo de aplicaciones web. </p><br>

                <div class="urls">
                    <div class='github-url'>
                        <a href="https://github.com/raulgh0201/crm-laravel-php-integratedtools-project" title="Haz click para ir a github">
                            <img src="/img/social-icons/github-mark.png" height='30px' width="30px" alt="github-icon">
                        </a>
                    </div>

                    <div class="website-url">
                        <a href="http://crm-integratedtools.raulghweb.com/" title="Haz click para ir a la web del proyecto">
                            <img src="/img/website-icon.png" height='30px' width="30px" alt="web-icon">
                        </a>
                    </div>
                </div>
            </div>
        </li>


        <li class='project'>
            <a href="{{ route('showProject', 7) }}">
                <div class="image">
                    <img src="/img/projectImgs/angular-project-briefcase.png" alt="crm-integratedtools-project-image">
                </div>
            </a>

            <div class="info">
                <h2>Portafolio de programador</h2>
                <h3>backend, frontend</h3>
                <h4>php, css, html, laravel</h4>
                <p>Portafolio de programador, el cual es la página web por la que estás navegando</p><br>

                <div class="urls">
                    <div class='github-url'>
                        <a href="" title="Haz click para ir a github">
                            <img src="/img/social-icons/github-mark.png" height='30px' width="30px" alt="github-icon">
                        </a>
                    </div>

                    <div class="website-url">
                        <a href="http://raulghweb.com" title="Haz click para ir a la web del proyecto">
                            <img src="/img/website-icon.png" height='30px' width="30px" alt="web-icon">
                        </a>
                    </div>
                </div>
            </div>
        </li>


        <li class='project'>
            <a href="{{ route('showProject', 2) }}">
                <div class="image">
                    <img src="/img/projectImgs/project-fortnite-blog-php.png" alt="crm-integratedtools-project-image">
                </div>
            </a>

            <div class="info">
                <h2>Blog de fortnite</h2>
                <h3>backend, frontend</h3>
                <h4>php, sql, css, html</h4>
                <p>Blog de fortnite inspirado en un master de php</p><br>

                <div class="urls">
                    <div class='github-url'>
                        <a href="https://github.com/raulgh0201/fortnite-blog-php" title="Haz click para ir a github">
                            <img src="/img/social-icons/github-mark.png" height='30px' width="30px" alt="github-icon">
                        </a>
                    </div>

                    <div class="website-url">
                        <a href="https://blog-fortnite.raulghweb.com " title="Haz click para ir a la web del proyecto">
                            <img src="/img/website-icon.png" height='30px' width="30px" alt="web-icon">
                        </a>
                    </div>
                </div>
            </div>

        </li>
    </ul>
</article>

<div class='clear'></div>

<br><br>
@include('includes.curriculum')
<br><br>
@include('includes.follow')



@endsection