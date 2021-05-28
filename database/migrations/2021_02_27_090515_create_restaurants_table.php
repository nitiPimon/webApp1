<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users');
            $table->string('name');
            $table->string('body');
            $table->string('location');
            $table->string('timeOC');
            $table->string('image');
            $table->integer('rating');            
            $table->timestamps();
        });

        DB::table('restaurants')
        ->insert(array(
            array('userID' => '1','name' => 'ครัวเจ้พลอย','body' => 'ร้านสวยอาหารใหญ่ไข่แดงเเหล่งธรรมมะ','location' => '105 ถถนสาย 15 สะเตง อำเภอ เมือง','timeOC' => '9.00-19.00 จ-ศ','image' => '6.jpeg','rating' => '5'),
           
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
