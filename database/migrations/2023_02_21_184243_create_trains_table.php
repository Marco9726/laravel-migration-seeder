<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trains', function (Blueprint $table) {
			$table->id();

			$table->string('azienda', 50);
			$table->string('stazione_partenza', 50);
			$table->string('stazione_arrivo', 50);
			$table->string('orario_partenza', 10);
			$table->string('orario_arrivo', 10);
			$table->string('codice_treno', 10)->nullable();
			$table->tinyInteger('numero_carrozze')->nullable();
			$table->boolean('in_orario');
			$table->boolean('cancellato');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('trains', function (Blueprint $table) {
			$table->string('codice_treno', 7)->change();
			$table->smallInteger('numero_carrozze')->change();
		});
	}
};
