<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionnementController extends Controller {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'positionnements';

	public function create() {
		return view('positionnement');
	}
	public function store() {

		$positionnements = new \App\Positionnement([
				'etudes'                    => request('etudes'),
				'position_etudes'           => request('position_etudes'),
				'objectif_etudes'           => request('objectif_etudes'),
				'autres'                    => request('autres'),
				'position_autres'           => request('position_autres'),
				'objectif_autres'           => request('objectif_autres'),
				'avenir'                    => request('avenir'),
				'position_avenir'           => request('position_avenir'),
				'objectif_avenir'           => request('objectif_avenir'),
				'soi'                       => request('soi'),
				'position_soi'              => request('position_soi'),
				'objectif_soi'              => request('objectif_soi'),
				'monde'                     => request('monde'),
				'position_monde'            => request('position_monde'),
				'objectif_monde'            => request('objectif_monde'),
				'engagement'                => request('engagement'),
				'position_engagement'       => request('position_engagement'),
				'objectif_engagement'       => request('objectif_engagement'),
				'tutorat_etudes'            => request('tutorat_etudes'),
				'stages_etudes'             => request('stages_etudes'),
				'anglais_etudes'            => request('anglais_etudes'),
				'parrainage_etudes'         => request('parrainage_etudes'),
				'orientation_etudes'        => request('orientation_etudes'),
				'budget_etudes'             => request('budget_etudes'),
				'berlin_etudes'             => request('berlin_etudes'),
				'sejourculturel_etudes'     => request('sejourculturel_etudes'),
				'evlocaux_etudes'           => request('evlocaux_etudes'),
				'abonnements_etudes'        => request('abonnements_etudes'),
				'dispositifs_etudes'        => request('dispositifs_etudes'),
				'tutorat_autres'            => request('tutorat_autres'),
				'stages_autres'             => request('stages_autres'),
				'anglais_autres'            => request('anglais_autres'),
				'parrainage_autres'         => request('parrainage_autres'),
				'orientation_autres'        => request('orientation_autres'),
				'budget_autres'             => request('budget_autres'),
				'berlin_autres'             => request('berlin_autres'),
				'sejourculturel_autres'     => request('sejourculturel_autres'),
				'evlocaux_autres'           => request('evlocaux_autres'),
				'abonnements_autres'        => request('abonnements_autres'),
				'dispositifs_autres'        => request('dispositifs_autres'),
				'tutorat_avenir'            => request('tutorat_avenir'),
				'stages_avenir'             => request('stages_avenir'),
				'anglais_avenir'            => request('anglais_avenir'),
				'parrainage_avenir'         => request('parrainage_avenir'),
				'orientation_avenir'        => request('orientation_avenir'),
				'budget_avenir'             => request('budget_avenir'),
				'berlin_avenir'             => request('berlin_avenir'),
				'sejourculturel_avenir'     => request('sejourculturel_avenir'),
				'evlocaux_avenir'           => request('evlocaux_avenir'),
				'abonnements_avenir'        => request('abonnements_avenir'),
				'dispositifs_avenir'        => request('dispositifs_avenir'),
				'tutorat_soi'               => request('tutorat_soi'),
				'stages_soi'                => request('stages_soi'),
				'anglais_soi'               => request('anglais_soi'),
				'parrainage_soi'            => request('parrainage_soi'),
				'orientation_soi'           => request('orientation_soi'),
				'budget_soi'                => request('budget_soi'),
				'berlin_soi'                => request('berlin_soi'),
				'sejourculturel_soi'        => request('sejourculturel_soi'),
				'evlocaux_soi'              => request('evlocaux_soi'),
				'abonnements_soi'           => request('abonnements_soi'),
				'dispositifs_soi'           => request('dispositifs_soi'),
				'tutorat_monde'             => request('tutorat_monde'),
				'stages_monde'              => request('stages_monde'),
				'anglais_monde'             => request('anglais_monde'),
				'parrainage_monde'          => request('parrainage_monde'),
				'orientation_monde'         => request('orientation_monde'),
				'budget_monde'              => request('budget_monde'),
				'berlin_monde'              => request('berlin_monde'),
				'sejourculturel_monde'      => request('sejourculturel_monde'),
				'evlocaux_monde'            => request('evlocaux_monde'),
				'abonnements_monde'         => request('abonnements_monde'),
				'dispositifs_monde'         => request('dispositifs_monde'),
				'tutorat_engagement'        => request('tutorat_engagement'),
				'stages_engagement'         => request('stages_engagement'),
				'anglais_engagement'        => request('anglais_engagement'),
				'parrainage_engagement'     => request('parrainage_engagement'),
				'orientation_engagement'    => request('orientation_engagement'),
				'budget_engagement'         => request('budget_engagement'),
				'berlin_engagement'         => request('berlin_engagement'),
				'sejourculturel_engagement' => request('sejourculturel_engagement'),
				'evlocaux_engagement'       => request('evlocaux_engagement'),
				'abonnements_engagement'    => request('abonnements_engagement'),
				'dispositifs_engagement'    => request('dispositifs_engagement'),
				'email'                     => auth()->user()->email,

			]);

		$positionnements->save();
		return redirect('/success');

	}

}
