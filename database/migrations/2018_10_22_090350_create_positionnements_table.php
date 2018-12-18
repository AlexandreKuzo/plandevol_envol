<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionnementsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('positionnements', function (Blueprint $table) {
				$table->increments('id');
				$table->string('etudes');
				$table->text('position_etudes');
				$table->text('objectif_etudes');
				$table->string('autres');
				$table->text('position_autres');
				$table->text('objectif_autres');
				$table->string('avenir');
				$table->text('position_avenir');
				$table->text('objectif_avenir');
				$table->string('soi');
				$table->text('position_soi');
				$table->text('objectif_soi');
				$table->string('monde');
				$table->text('position_monde');
				$table->text('objectif_monde');
				$table->string('engagement');
				$table->text('position_engagement');
				$table->text('objectif_engagement');
				$table->string('tutorat_etudes')->nullable();
				$table->string('stages_etudes')->nullable();
				$table->string('anglais_etudes')->nullable();
				$table->string('parrainage_etudes')->nullable();
				$table->string('orientation_etudes')->nullable();
				$table->string('budget_etudes')->nullable();
				$table->string('berlin_etudes')->nullable();
				$table->string('sejourculturel_etudes')->nullable();
				$table->string('evlocaux_etudes')->nullable();
				$table->string('abonnements_etudes')->nullable();
				$table->text('dispositifs_etudes')->nullable();
				$table->string('tutorat_autres')->nullable();
				$table->string('stages_autres')->nullable();
				$table->string('anglais_autres')->nullable();
				$table->string('parrainage_autres')->nullable();
				$table->string('orientation_autres')->nullable();
				$table->string('budget_autres')->nullable();
				$table->string('berlin_autres')->nullable();
				$table->string('sejourculturel_autres')->nullable();
				$table->string('evlocaux_autres')->nullable();
				$table->string('abonnements_autres')->nullable();
				$table->text('dispositifs_autres')->nullable();
				$table->string('tutorat_avenir')->nullable();
				$table->string('stages_avenir')->nullable();
				$table->string('anglais_avenir')->nullable();
				$table->string('parrainage_avenir')->nullable();
				$table->string('orientation_avenir')->nullable();
				$table->string('budget_avenir')->nullable();
				$table->string('berlin_avenir')->nullable();
				$table->string('sejourculturel_avenir')->nullable();
				$table->string('evlocaux_avenir')->nullable();
				$table->string('abonnements_avenir')->nullable();
				$table->text('dispositifs_avenir')->nullable();
				$table->string('tutorat_soi')->nullable();
				$table->string('stages_soi')->nullable();
				$table->string('anglais_soi')->nullable();
				$table->string('parrainage_soi')->nullable();
				$table->string('orientation_soi')->nullable();
				$table->string('budget_soi')->nullable();
				$table->string('berlin_soi')->nullable();
				$table->string('sejourculturel_soi')->nullable();
				$table->string('evlocaux_soi')->nullable();
				$table->string('abonnements_soi')->nullable();
				$table->text('dispositifs_soi')->nullable();
				$table->string('tutorat_monde')->nullable();
				$table->string('stages_monde')->nullable();
				$table->string('anglais_monde')->nullable();
				$table->string('parrainage_monde')->nullable();
				$table->string('orientation_monde')->nullable();
				$table->string('budget_monde')->nullable();
				$table->string('berlin_monde')->nullable();
				$table->string('sejourculturel_monde')->nullable();
				$table->string('evlocaux_monde')->nullable();
				$table->string('abonnements_monde')->nullable();
				$table->text('dispositifs_monde')->nullable();
				$table->string('tutorat_engagement')->nullable();
				$table->string('stages_engagement')->nullable();
				$table->string('anglais_engagement')->nullable();
				$table->string('parrainage_engagement')->nullable();
				$table->string('orientation_engagement')->nullable();
				$table->string('budget_engagement')->nullable();
				$table->string('berlin_engagement')->nullable();
				$table->string('sejourculturel_engagement')->nullable();
				$table->string('evlocaux_engagement')->nullable();
				$table->string('abonnements_engagement')->nullable();
				$table->text('dispositifs_engagement')->nullable();
				$table->string('email')->nullable();

				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('positionnements');
	}
}
