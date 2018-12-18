<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>L'ENVOL - Le Plan de Vol</title>

        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" rel="stylesheet">
    </head>
    <body>




<!--Annonce formulaire-->

    <section class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Ton dernier Plan de Vol - {{ Auth::user()->name }}
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-10">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Ton dernier positionnement sur le radar de vol - {{ Auth::user()->name }}</p>


                </header>

                 <p class="">Rempli le : @foreach(auth()->user()->positionnement as $positionnement) {{ $positionnement->created_at->format('d/m/Y') }}</p>
                    @endforeach



                <div class="card-content">
                <div class="card-control">
                    <div class="field is-horizontal">
                        <p class="">Le rapport aux études : @foreach(auth()->user()->positionnement as $positionnement)
                   {{ $positionnement->etudes }}<br>{{ $positionnement->position_etudes }}<br>Objectif d'ici un an : {{ $positionnement->objectif_etudes }}

                    @endforeach</p>

                    </div>


                    <div class="field is-horizontal">

                    <p class="">Le rapport aux autres : @foreach(auth()->user()->positionnement as $positionnement)
                    {{ $positionnement->autres }}<br>{{ $positionnement->position_autres }}<br>Objectif d'ici un an : {{ $positionnement->objectif_autres }}

                    @endforeach</p>

                    </div>


                    <div class="field is-horizontal">

                    <p class="">Le rapport à l'avenir : @foreach(auth()->user()->positionnement as $positionnement)
                    {{ $positionnement->avenir }}<br>{{ $positionnement->position_avenir }}<br>Objectif d'ici un an : {{ $positionnement->objectif_avenir }}

                    @endforeach</p>

                    </div>


                    <div class="field is-horizontal">

                    <p class="">Le rapport à soi : @foreach(auth()->user()->positionnement as $positionnement)
                    {{ $positionnement->soi }}<br>{{ $positionnement->position_soi }}<br>Objectif d'ici un an : {{ $positionnement->objectif_soi }}

                    @endforeach</p>
                        </div>



                    <div class="field is-horizontal">

                    <p class="">Le rapport au monde : @foreach(auth()->user()->positionnement as $positionnement)
                    {{ $positionnement->monde }}<br>{{ $positionnement->position_monde }}<br>Objectif d'ici un an : {{ $positionnement->objectif_monde }}

                    @endforeach</p>

                        </div>


                    <div class="field is-horizontal">

                    <p class="">Le rapport à l'engagement : @foreach(auth()->user()->positionnement as $positionnement)
                    {{ $positionnement->engagement }}<br>{{ $positionnement->position_engagement }}<br>Objectif d'ici un an : {{ $positionnement->objectif_engagement }}

                    @endforeach</p>

                    </div>


    </div>
</div>
</div>

     <div class="columns is-marginless is-centered">
        <div class="column is-10">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Ta dernière feuille de route</p>

                </header>



                <div class="card-content">
                <div class="card-control">
                    <p class="">Les dispositifs sur lesquels tu comptes t'appuyer pour avancer.</p>
                    <p class="">Dimension études : @foreach(auth()->user()->positionnement as $positionnement)
                   - {{ $positionnement->tutorat_etudes }}  {{ $positionnement->stages_etudes }}  {{ $positionnement->anglais_etudes }}  {{ $positionnement->parrainage_etudes }}  {{ $positionnement->orientation_etudes }} {{ $positionnement->budget_etudes }} {{ $positionnement->berlin_etudes }} {{ $positionnement->sejourculturel_etudes }} {{ $positionnement->evlocaux_etudes }} {{ $positionnement->abonnements_etudes }} - <br>{{ $positionnement->dispositifs_etudes }}

                    @endforeach</p>

                    <p class="">Dimension autres : @foreach(auth()->user()->positionnement as $positionnement)
                   - {{ $positionnement->tutorat_autres }}  {{ $positionnement->stages_autres }}  {{ $positionnement->anglais_autres }}  {{ $positionnement->parrainage_autres }}  {{ $positionnement->orientation_autres }}  {{ $positionnement->budget_autres }} {{ $positionnement->berlin_autres }} {{ $positionnement->sejourculturel_autres }} {{ $positionnement->evlocaux_autres }} {{ $positionnement->abonnements_autres }} - <br>{{ $positionnement->dispositifs_autres }}

                    @endforeach</p>

                     <p class="">Dimension avenir : @foreach(auth()->user()->positionnement as $positionnement)
                   - {{ $positionnement->tutorat_avenir }}  {{ $positionnement->stages_avenir }}  {{ $positionnement->anglais_avenir }}  {{ $positionnement->parrainage_avenir }}  {{ $positionnement->orientation_avenir }}  {{ $positionnement->budget_avenir }} {{ $positionnement->berlin_avenir }} {{ $positionnement->sejourculturel_avenir }} {{ $positionnement->evlocaux_avenir }} {{ $positionnement->abonnements_avenir }} - <br>{{ $positionnement->dispositifs_avenir }}



                    @endforeach</p>

                     <p class="">Dimension soi : @foreach(auth()->user()->positionnement as $positionnement)
                   - {{ $positionnement->tutorat_soi }}  {{ $positionnement->stages_soi }}  {{ $positionnement->anglais_soi }}  {{ $positionnement->parrainage_soi }}  {{ $positionnement->orientation_soi }}  {{ $positionnement->budget_soi }} {{ $positionnement->berlin_soi }} {{ $positionnement->sejourculturel_soi }} {{ $positionnement->evlocaux_soi }} {{ $positionnement->abonnements_soi }}- <br>{{ $positionnement->dispositifs_soi }}



                    @endforeach</p>

                      <p class="">Dimension monde : @foreach(auth()->user()->positionnement as $positionnement)
                   - {{ $positionnement->tutorat_monde }}  {{ $positionnement->stages_monde }}  {{ $positionnement->anglais_monde }}  {{ $positionnement->parrainage_monde }}  {{ $positionnement->orientation_monde }}  {{ $positionnement->budget_monde }} {{ $positionnement->berlin_monde }} {{ $positionnement->sejourculturel_monde }} {{ $positionnement->evlocaux_monde }} {{ $positionnement->abonnements_monde }} - <br>{{ $positionnement->dispositifs_monde }}



                    @endforeach</p>

                       <p class="">Dimension engagement : @foreach(auth()->user()->positionnement as $positionnement)
                   - {{ $positionnement->tutorat_engagement }}  {{ $positionnement->stages_engagement }}  {{ $positionnement->anglais_engagement }}  {{ $positionnement->parrainage_engagement }}  {{ $positionnement->orientation_engagement }}  {{ $positionnement->budget_engagement }} {{ $positionnement->berlin_engagement }} {{ $positionnement->sejourculturel_engagement }} {{ $positionnement->evlocaux_engagement }} {{ $positionnement->abonnements_engagement }} - <br>{{ $positionnement->dispositifs_engagement }}



                    @endforeach</p>





    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
