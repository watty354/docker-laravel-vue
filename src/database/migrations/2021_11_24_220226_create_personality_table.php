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
            ['sentence' => 'あなたはストレスに過敏で不安や緊張が高く神経質で、目の前の相手の反応を上手にくみ取ることもできます。']
        );
        DB::table('personality')->insert(

            ['sentence' => 'あなたは興味関心が外の人や物に向けられていて積極性、社交性が高く陽気な性格です']

        );
        DB::table('personality')->insert(

            ['sentence' => 'あなたは新しい経験に対してオープンで、好奇心が強く想像力が豊かであり、
            走り出してから考えるタイプでしょう。']
        );
        DB::table('personality')->insert(

            ['sentence' => 'あなたは利己的でなく、他者のことを思いやれる。やさしく共感性が高いでしょう。']
        );
        DB::table('personality')->insert(

            ['sentence' => 'あなたは真面目で計画的。責任感があり物事に一生懸命向き合う事ができます。']
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
