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
			$table->string('stazione_partenda', 50);
			$table->string('stazione_arrivo', 50);
			$table->string('orario_partenza', 10);
			$table->string('orario_arrivo', 10);
			$table->string('codice_treno', 12)->unsigned();
			$table->tinyInteger('numero_carrozze')->unsigned();
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
		Schema::dropIfExists('trains');
	}
};
