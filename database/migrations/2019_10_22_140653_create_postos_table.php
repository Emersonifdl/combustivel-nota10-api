<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postos', function (Blueprint $table) {
            $table->increments('id');    
            $table->string('gas_station_cod');
            $table->string('gas_station_name');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('city');
            $table->string('state');
            $table->boolean('show_in_app');
            $table->dateTime('last_visit_date');

            $table->boolean('store');
            $table->boolean('oil_change');
            $table->boolean('washing');
            $table->boolean('rubber_repair');

            $table->boolean('common_ethanol');
            $table->boolean('additive_ethanol');
            $table->boolean('common_gasoline');
            $table->boolean('additive_gasoline');
            $table->boolean('premium_gasoline');
            $table->boolean('s10_diesel_common');
            $table->boolean('s10_diesel_additive');
            $table->boolean('s500_diesel_common');
            $table->boolean('s500_diesel_additive');

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
        Schema::dropIfExists('postos');
    }
}
