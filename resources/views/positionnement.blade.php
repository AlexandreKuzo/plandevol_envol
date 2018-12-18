@extends('layouts.app')

@section('content')



<section class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                Positionne-toi sur le radar et fixe tes objectifs.
                </h1>
                <h2 class="subtitle">Besoin d'un rappel sur l'outil ?<br>Tu peux télécharger le Plan de Vol en PDF en cliquant <a class="button is-rounded" href="{{ asset('pdv.pdf') }}" target="_blank">ici.</a> </h2>
            </div>
        </div>
    </section>

<form method="POST" action="{{ url('positionnement') }}">
    {{ csrf_field() }}

    <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        <a href="" onclick ="" id="def_etudes"> Rapport aux études :</a>  où te positionnes-tu sur le radar de vol ?
                        </p>
                        <script>
                        var descrEtudes = document.getElementById("def_etudes");
                        def_etudes.onclick = function(){
                            alert("Rapport aux études : aller aussi loin que possible dans mes études, en ayant la motivation, les acquis et les méthodes de travail pour franchir les étapes de mon cursus.");
                            return false;
                        }
                    </script>
                    </header>

                    <div class="card-content">
   <section class="section">
                        <div class="select is-rounded is-warning">
                        <select name="etudes">
                <option value="Escale A."> A : je reste en retrait </option>
                <option value="Escale B."> B : je m'intéresse </option>
                <option value="Escale C."> C : j'agis mais c'est aléatoire </option>
                <option value="Escale D."> D : je persévère et je gagne en régularité </option>
                <option value="Escale E."> E : je suis proactif </option>


                       </select>
                   </div>
                   <div class="field is-horizontal">
                       <p class="">Explique ton positionnement :</p>
                   </div>
                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link"placeholder="Explique ton positionnement." name="position_etudes" rows="10" required></textarea>

                            </div>

                             <div class="field is-horizontal">
                       <p class="">Quels sont tes objectifs d'ici un an ?</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique tes objectifs !" name="objectif_etudes" rows="10" required></textarea>

                            </div>
                        </section>
                        </div>

                    </div>





            </div>

 <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        <a href="" onclick ="" id="def_autres"> Rapport aux autres : </a>  où te positionnes-tu sur le radar de vol ?
                        </p>
                        <script>
                        var descrAutres = document.getElementById("def_autres");
                        def_autres.onclick = function(){
                            alert("Rapport aux autres : savoir communiquer et interagir avec les autres quelle que soit la situation, et s'enrichir des différences.");
                            return false;
                        }
                    </script>
                    </header>

                    <div class="card-content">
   <section class="section">
                        <div class="select is-rounded is-warning">
                        <select name="autres">
                <option value="Escale A."> A : je reste en retrait </option>
                <option value="Escale B."> B : je m'intéresse </option>
                <option value="Escale C."> C : j'agis mais c'est aléatoire </option>
                <option value="Escale D."> D : je persévère et je gagne en régularité </option>
                <option value="Escale E."> E : je suis proactif </option>


                       </select>
                   </div>

                   <div class="field is-horizontal">
                       <p class="">Explique ton positionnement :</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique ton positionnement." name="position_autres" rows="10" required></textarea>

                            </div>

            <div class="field is-horizontal">
                       <p class="">Quels sont tes objectifs d'ici un an ?</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique tes objectifs !" name="objectif_autres" rows="10" required></textarea>

                            </div>

                        </section>
                        </div>

                    </div>





            </div>

            <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        <a href="" onclick ="" id="def_avenir"> Rapport à l'avenir : </a>  où te positionnes-tu sur le radar de vol ?
                        </p>
                        <script>
                        var descrAvenir = document.getElementById("def_avenir");
                        def_avenir.onclick = function(){
                            alert("Rapport à l'avenir : me projeter et réaliser des choix d'orientation éclairés à la hauteur de mes capacités.");
                            return false;
                        }
                    </script>
                    </header>

                    <div class="card-content">
   <section class="section">
                        <div class="select is-rounded is-warning">
                        <select name="avenir">
                <option value="Escale A."> A : je reste en retrait </option>
                <option value="Escale B."> B : je m'intéresse </option>
                <option value="Escale C."> C : j'agis mais c'est aléatoire </option>
                <option value="Escale D."> D : je persévère et je gagne en régularité </option>
                <option value="Escale E."> E : je suis proactif </option>


                       </select>
                   </div>

                <div class="field is-horizontal">
                       <p class="">Explique ton positionnement :</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique ton positionnement." name="position_avenir" rows="10" required></textarea>

                            </div>

                             <div class="field is-horizontal">
                       <p class="">Quels sont tes objectifs d'ici un an ?</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique tes objectifs !" name="objectif_avenir" rows="10" required></textarea>

                            </div>
                        </section>
                        </div>

                    </div>





            </div>

                        <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        <a href="" onclick ="" id="def_soi"> Rapport à soi : </a>  où te positionnes-tu sur le radar de vol ?
                        </p>
                        <script>
                        var descrSoi = document.getElementById("def_soi");
                        def_soi.onclick = function(){
                            alert("Rapport à soi : croire en mes chances, connaître mes capacités, affirmer mes goûts et ne pas craindre l'échec.");
                            return false;
                        }
                    </script>
                    </header>


                   <div class="card-content">
   <section class="section">
                        <div class="select is-rounded is-warning">
                        <select name="soi">
                <option value="Escale A."> A : je reste en retrait </option>
                <option value="Escale B."> B : je m'intéresse </option>
                <option value="Escale C."> C : j'agis mais c'est aléatoire </option>
                <option value="Escale D."> D : je persévère et je gagne en régularité </option>
                <option value="Escale E."> E : je suis proactif </option>


                       </select>
                   </div>

                <div class="field is-horizontal">
                       <p class="">Explique ton positionnement :</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique ton positionnement." name="position_soi" rows="10" required></textarea>

                            </div>

                             <div class="field is-horizontal">
                       <p class="">Quels sont tes objectifs d'ici un an ?</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique tes objectifs !" name="objectif_soi" rows="10" required></textarea>

                            </div>
                        </section>
                        </div>

                    </div>





            </div>


                        <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        <a href="" onclick ="" id="def_monde"> Rapport au monde : </a>  où te positionnes-tu sur le radar de vol ?
                        </p>
                        <script>
                        var descrMonde = document.getElementById("def_monde");
                        def_monde.onclick = function(){
                            alert("Rapport au monde : élargir mes perspectives, notamment culturelles et géographiques.");
                            return false;
                        }
                    </script>
                    </header>


                   <div class="card-content">
   <section class="section">
                        <div class="select is-rounded is-warning">
                        <select name="monde">
                <option value="Escale A."> A : je reste en retrait </option>
                <option value="Escale B."> B : je m'intéresse </option>
                <option value="Escale C."> C : j'agis mais c'est aléatoire </option>
                <option value="Escale D."> D : je persévère et je gagne en régularité </option>
                <option value="Escale E."> E : je suis proactif </option>


                       </select>
                   </div>

                <div class="field is-horizontal">
                       <p class="">Explique ton positionnement :</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique ton positionnement." name="position_monde" rows="10" required></textarea>

                            </div>

                             <div class="field is-horizontal">
                       <p class="">Quels sont tes objectifs d'ici un an ?</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique tes objectifs !" name="objectif_monde" rows="10" required></textarea>

                            </div>
                        </section>
                        </div>

                    </div>





            </div>

             <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        <a href="" onclick ="" id="def_engagement"> Rapport à l'engagement : </a>  où te positionnes-tu sur le radar de vol ?
                        </p>
                        <script>
                        var descrEngagement = document.getElementById("def_engagement");
                        def_engagement.onclick = function(){
                            alert("Rapport à l'engagement : M'engager et assumer mes responsabilités (au sein de L'Envol ou en dehors).");
                            return false;
                        }
                    </script>
                    </header>


                   <div class="card-content">
   <section class="section">
                        <div class="select is-rounded is-warning">
                        <select name="engagement">
                <option value="Escale A."> A : je reste en retrait </option>
                <option value="Escale B."> B : je m'intéresse </option>
                <option value="Escale C."> C : j'agis mais c'est aléatoire </option>
                <option value="Escale D."> D : je persévère et je gagne en régularité </option>
                <option value="Escale E."> E : je suis proactif </option>


                       </select>
                   </div>

                <div class="field is-horizontal">
                       <p class="">Explique ton positionnement :</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique ton positionnement." name="position_engagement" rows="10" required></textarea>

                            </div>

                             <div class="field is-horizontal">
                       <p class="">Quels sont tes objectifs d'ici un an ?</p>
                   </div>

                <div class="field">
                    <div class="control">
                   <textarea class="textarea is-link" placeholder="Explique tes objectifs !" name="objectif_engagement" rows="10" required></textarea>

                            </div>
                        </section>
                        </div>

                    </div>





            </div>

            <section class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Construis maintenant ta feuille de route !</h1>
                <h2 class="subtitle">Après avoir fixé tes objectifs, coche les activités qui te seront utiles pour les atteindre.</h2>
            </div>
        </div>
    </section>


 <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">Dimension études : quelles activités de L'Envol vont t'aider à atteindre tes objectifs ?
                        </p>

                    </header>


                    <div class="card-content">
   <section class="section">
        <label class="checkbox">
            <input type="checkbox" name="tutorat_etudes" value="Tutorat" id="tutorat_etudes">
                 Tutorat
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="stages_etudes" value="Stages" id="stages_etudes">
                 Stages intensifs
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="campus_etudes" value="Campus" id="campus_etudes">
                Campus d'intégration
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="anglais_etudes" value="Anglais" id="anglais_etudes">
                 Anglais
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="parrainage_etudes" value="Parrainage" id="parrainage_etudes">
                 Parrainage
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="orientation_etudes" value="Orientation" id="orientation_etudes">
                 Orientation
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="budget_etudes" value="Budget" id="budget_etudes">
                Pédagogie financière (pour les Terminales)
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="berlin_etudes" value="Berlin" id="berlin_etudes">
               Séjour à Berlin
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="sejourculturel_etudes" value="Séjour culturel" id="sejourculturel_etudes">
                Séjour culturel
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="abonnements_etudes" value="Abonnements" id="abonnements_etudes">
                Abonnements journaux
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="evlocaux_etudes" value="Evénements locaux" id="evlocaux_etudes">
                Evénements locaux
                    </label>



                <div class="card-content">
                    <div class="">
                        Si tu as des précisions à apporter sur les accompagnements , vas-y :
                   <textarea class="textarea is-link"placeholder="Précise si besoin." name="dispositifs_etudes" rows="5"></textarea>

                            </div>
                        </div>
                    </section>
                </div>
            </div>


<div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                         Dimension autres : quelles activités de L'Envol vont t'aider à atteindre tes objectifs ?
                        </p>

                    </header>


                    <div class="card-content">
   <section class="section">
        <label class="checkbox">
            <input type="checkbox" name="tutorat_autres" value="Tutorat" id="tutorat_autres">
                 Tutorat
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="stages_autres" value="Stages" id="stages_autres">
                 Stages intensifs
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="campus_autres" value="Campus" id="campus_autres">
                Campus d'intégration
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="anglais_autres" value="Anglais" id="anglais_autres">
                 Anglais
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="parrainage_autres" value="Parrainage" id="parrainage_autres">
                 Parrainage
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="orientation_autres" value="Orientation" id="orientation_autres">
                 Orientation
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="budget_autres" value="Budget" id="budget_autres">
                Pédagogie financière (pour les Terminales)
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="berlin_autres" value="Berlin" id="berlin_autres">
               Séjour à Berlin
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="sejourculturel_autres" value="Séjour culturel" id="sejourculturel_autres">
                Séjour culturel
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="abonnements_autres" value="Abonnements" id="abonnements_autres">
                Abonnements journaux
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="evlocaux_autres" value="Evénements locaux" id="evlocaux_autres">
                Evénements locaux
                    </label>



                <div class="card-content">
                    <div class="">
                        Si tu as des précisions à apporter sur les accompagnements , vas-y :
                   <textarea class="textarea is-link"placeholder="Précise si besoin." name="dispositifs_autres" rows="5"></textarea>

                            </div>
                             </div>
                    </section>
                </div>
            </div>

    <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        Dimension avenir : quelles activités de L'Envol vont t'aider à atteindre tes objectifs ?
                        </p>

                    </header>


                    <div class="card-content">
   <section class="section">
        <label class="checkbox">
            <input type="checkbox" name="tutorat_avenir" value="Tutorat" id="tutorat_avenir">
                 Tutorat
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="stages_avenir" value="Stages" id="stages_avenir">
                 Stages intensifs
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="campus_avenir" value="Campus" id="campus_avenir">
                Campus d'intégration
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="anglais_avenir" value="Anglais" id="anglais_avenir">
                 Anglais
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="parrainage_avenir" value="Parrainage" id="parrainage_avenir">
                 Parrainage
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="orientation_avenir" value="Orientation" id="orientation_avenir">
                 Orientation
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="budget_avenir" value="Budget" id="budget_avenir">
                Pédagogie financière (pour les Terminales)
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="berlin_avenir" value="Berlin" id="berlin_avenir">
               Séjour à Berlin
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="sejourculturel_avenir" value="Séjour culturel" id="sejourculturel_avenir">
                Séjour culturel
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="abonnements_avenir" value="Abonnements" id="abonnements_avenir">
                Abonnements journaux
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="evlocaux_avenir" value="Evénements locaux" id="evlocaux_avenir">
                Evénements locaux
                    </label>



                <div class="card-content">
                    <div class="">
                        Si tu as des précisions à apporter sur les accompagnements , vas-y :
                   <textarea class="textarea is-link"placeholder="Précise si besoin." name="dispositifs_avenir" rows="5"></textarea>

                            </div>
                             </div>
                    </section>
                </div>
            </div>

            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                         Dimension soi : quelles activités de L'Envol vont t'aider à atteindre tes objectifs ?
                        </p>

                    </header>


                    <div class="card-content">
   <section class="section">
        <label class="checkbox">
            <input type="checkbox" name="tutorat_soi" value="Tutorat" id="tutorat_soi">
                 Tutorat
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="stages_soi" value="Stages" id="stages_soi">
                 Stages intensifs
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="campus_soi" value="Campus" id="campus_soi">
                Campus d'intégration
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="anglais_soi" value="Anglais" id="anglais_soi">
                 Anglais
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="parrainage_soi" value="Parrainage" id="parrainage_soi">
                 Parrainage
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="orientation_soi" value="Orientation" id="orientation_soi">
                 Orientation
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="budget_soi" value="Budget" id="budget_soi">
                Pédagogie financière (pour les Terminales)
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="berlin_soi" value="Berlin" id="berlin_soi">
               Séjour à Berlin
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="sejourculturel_soi" value="Séjour culturel" id="sejourculturel_soi">
                Séjour culturel
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="abonnements_soi" value="Abonnements" id="abonnements_soi">
                Abonnements journaux
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="evlocaux_soi" value="Evénements locaux" id="evlocaux_soi">
                Evénements locaux
                    </label>

                <div class="card-content">
                    <div class="">
                        Si tu as des précisions à apporter sur les accompagnements , vas-y :
                   <textarea class="textarea is-link"placeholder="Précise si besoin." name="dispositifs_soi" rows="5"></textarea>

                            </div>
                             </div>
                    </section>
                </div>
            </div>


            <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                         Dimension monde : quelles activités de L'Envol vont t'aider à atteindre tes objectifs ?
                        </p>
                    </header>


                    <div class="card-content">
   <section class="section">
        <label class="checkbox">
            <input type="checkbox" name="tutorat_monde" value="Tutorat" id="tutorat_monde">
                 Tutorat
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="stages_monde" value="Stages" id="stages_monde">
                 Stages intensifs
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="campus_monde" value="Campus" id="campus_monde">
                Campus d'intégration
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="anglais_monde" value="Anglais" id="anglais_monde">
                 Anglais
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="parrainage_monde" value="Parrainage" id="parrainage_monde">
                 Parrainage
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="orientation_monde" value="Orientation" id="orientation_monde">
                 Orientation
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="budget_monde" value="Budget" id="budget_monde">
                Pédagogie financière (pour les Terminales)
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="berlin_monde" value="Berlin" id="berlin_monde">
               Séjour à Berlin
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="sejourculturel_monde" value="Séjour culturel" id="sejourculturel_monde">
                Séjour culturel
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="abonnements_monde" value="Abonnements" id="abonnements_monde">
                Abonnements journaux
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="evlocaux_monde" value="Evénements locaux" id="evlocaux_monde">
                Evénements locaux
                    </label>



                <div class="card-content">
                    <div class="">
                        Si tu as des précisions à apporter sur les accompagnements , vas-y :
                   <textarea class="textarea is-link"placeholder="Précise si besoin." name="dispositifs_monde" rows="5"></textarea>

                            </div>
                             </div>
                    </section>
                </div>
            </div>

             <div class="column is-11">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title is-centered">
                        Rapport à l'engagament : quelles activités de L'Envol vont t'aider à atteindre tes objectifs ?
                        </p>
                    </header>


                    <div class="card-content">
   <section class="section">
        <label class="checkbox">
            <input type="checkbox" name="tutorat_engagament" value="Tutorat" id="tutorat_engagament">
                 Tutorat
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="stages_engagament" value="Stages" id="stages_engagament">
                 Stages intensifs
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="campus_engagament" value="Campus" id="campus_engagament">
                Campus d'intégration
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="anglais_engagament" value="Anglais" id="anglais_engagament">
                 Anglais
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="parrainage_engagament" value="Parrainage" id="parrainage_engagament">
                 Parrainage
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="orientation_engagament" value="Orientation" id="orientation_engagament">
                 Orientation
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="budget_engagament" value="Budget" id="budget_engagament">
                Pédagogie financière (pour les Terminales)
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="berlin_engagement" value="Berlin" id="berlin_engagement">
               Séjour à Berlin
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="sejourculturel_engagement" value="Séjour culturel" id="sejourculturel_engagement">
                Séjour culturel
                    </label>


            <label class="checkbox">
            <input type="checkbox" name="abonnements_engagement" value="Abonnements" id="abonnements_engagement">
                Abonnements journaux
                    </label>

            <label class="checkbox">
            <input type="checkbox" name="evlocaux_engagement" value="Evénements locaux" id="evlocaux_engagement">
                Evénements locaux
                    </label>



                <div class="card-content">
                    <div class="">
                        Si tu as des précisions à apporter sur les accompagnements , vas-y :
                   <textarea class="textarea is-link"placeholder="Précise si besoin." name="dispositifs_engagament" rows="5"></textarea>

                            </div>
                             </div>
                    </section>

                </div>

<div class="field is-horizontal">
    <div class="field-label"></div>
        <div class="field-body">
            <div class="field is-grouped">
                <div class="control">
                <button type="submit" class="button is-link is-rounded" id="registration" onclick=" return confirm('Es-tu sûr de vouloir enregistrer ces réponses ?');">ENREGISTRER</button>
                                    </div>

                         <script>
                        var validateRadar = document.getElementById("registration");
                        registration.onclick = function(){
                            return confirm("Es-tu sûr de vouloir enregistrer ces réponses ?");

                            return true;
                        }
                    </script>


            </div>

            </form>

 </div>


@endsection