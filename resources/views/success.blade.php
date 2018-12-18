@extends('layouts.app')

@section('content')



<section class="hero is-success">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Saisie terminée !
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
                            Ton compte -  {{ Auth::user()->name }}
                        </p>
                    </header>

<div class="card-content">
    <div class="card-control">
    Télécharge ton Plan de Vol et envoie-le à l'adresse suivante : <strong>alexandre.kuzo@article-1.eu</strong></div>

                <p><a class="button is-link is-rounded has-text-centered" href="/previous">TELECHARGER</a></p>



                        <p>Merci d'avoir rempli le Plan de Vol. Tu as la possibilité de le remplir de nouveau avant la fin de l'année prochaine.  </p>

                        <br><p>Tu souhaites enregistrer tes <strong>bulletins</strong> ? Accède au formulaire à ce <a href="https://lenvol-bulletins.fr" target="blank">lien</a>.</p>

                           <br>Et pour demander du <strong>tutorat</strong>, c'est <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWVZZELTzAw5F6qbxLbd8DFG1wmbN4BJ1WWfC3QYrt2-y-Jw/viewform?usp=sf_link" target="blank">par ici</a>.</p>


                        <br><strong>A bientôt !</strong></p>


            </div>
        </div>
    </div>
</nav>
</div>
</div>
</div>


@endsection