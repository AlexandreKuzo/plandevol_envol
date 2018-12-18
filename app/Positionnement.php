<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positionnement extends Model {
	protected $table   = 'positionnements';
	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

		'etudes', 'position_etudes', 'objectif_etudes', 'autres', 'position_autres', 'objectif_autres', 'avenir', 'position_avenir', 'objectif_avenir', 'soi', 'position_soi', 'objectif_soi', 'monde', 'position_monde', 'objectif_monde', 'engagement', 'position_engagement', 'objectif_engagement', 'tutorat_etudes', 'stages_etudes', 'anglais_etudes', 'parrainage_etudes', 'orientation_etudes', 'budget_etudes', 'berlin_etudes', 'sejourculturel_etudes', 'evlocaux_etudes', 'abonnements_etudes', 'dispositifs_etudes', 'tutorat_autres', 'stages_autres', 'anglais_autres', 'parrainage_autres', 'orientation_autres', 'budget_autres', 'dispositifs_autres', 'berlin_autres', 'sejourculturel_autres', 'evlocaux_autres', 'abonnements_autres', 'tutorat_avenir', 'stages_avenir', 'anglais_avenir', 'parrainage_avenir', 'orientation_avenir', 'budget_avenir', 'berlin_avenir', 'sejourculturel_avenir', 'evlocaux_avenir', 'abonnements_avenir', 'dispositifs_avenir', 'tutorat_soi', 'stages_soi', 'anglais_soi', 'parrainage_soi', 'orientation_soi', 'budget_soi', 'berlin_soi', 'sejourculturel_soi', 'evlocaux_soi', 'abonnements_soi', 'dispositifs_soi', 'tutorat_monde', 'stages_monde', 'anglais_monde', 'parrainage_monde', 'orientation_monde', 'budget_monde', 'berlin_monde', 'sejourculturel_monde', 'evlocaux_monde', 'abonnements_monde', 'dispositifs_monde', 'tutorat_engagement', 'stages_engagement', 'anglais_engagement', 'parrainage_engagement', 'orientation_engagement', 'budget_engagement', 'berlin_engagement', 'sejourculturel_engagement', 'evlocaux_engagement', 'abonnements_engagement', 'dispositifs_engagement', 'email'

	];
}
