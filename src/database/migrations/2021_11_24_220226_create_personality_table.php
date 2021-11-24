<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('personality')) {  
        Schema::create('personality', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sentence');
        });

        DB::table('personality')->insert(
            ['sentence' => 'majime']
        );
        DB::table('personality')->insert(

            ['sentence' => 'humajime']

        );
        DB::table('personality')->insert(

            ['sentence' => 'huhumajime']
        );
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personality');
    }
}
