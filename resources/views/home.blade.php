@extends('layouts.app')

@section('content')



<section class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Le Plan de Vol
                </h1>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-10">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Ton compte - {{ Auth::user()->name }}
                        </p>
                    </header>

                    <div class="card-content">
Connexion réussie ! Tu peux te positionner sur le Plan de Vol, c'est parti !
                    </div>

                    <nav class="level">

                        <p class="level-item has-text-centered">
                            <a class="link is-link" id="lien_form" onclick=" return confirm('IMPORTANT. En remplissant le Plan de Vol, je suis d''accord pour que l''équipe de L''Envol conserve mes réponses et les transmette éventuellement à mon parrain ou ma marraine.');" href="{{ route ('positionnement') }}">Je remplis mon Plan de Vol !</a>

                        </p>
                          <script>
                        var linkPositionnement = document.getElementById("lien_form");
                        lien_form.onclick = function(){
                            return confirm("IMPORTANT. En remplissant le Plan de Vol, je suis d'accord pour que l'équipe de L'Envol conserve mes réponses et les transmette éventuellement à mon parrain ou ma marraine.");

                            return true;
                        }
                    </script>
                    </nav>






            </div>
@endsection