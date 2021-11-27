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
            ['sentence' => 'ストレスに過敏で不安や緊張が高く神経質。']
        );
        DB::table('personality')->insert(

            ['sentence' => '興味関心が外の人や物に向けられている。積極性、社交性が高く陽気。']

        );
        DB::table('personality')->insert(

            ['sentence' => '新しい経験に対してオープンで、好奇心が強く想像力が豊か。
            走り出してから考えるタイプ']
        );
        DB::table('personality')->insert(

            ['sentence' => '利己的でなく、他者のことを思いやれる。やさしく共感性が高い。']
        );
        DB::table('personality')->insert(

            ['sentence' => '真面目で計画的。責任感があり勤勉で自己規律的。']
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
