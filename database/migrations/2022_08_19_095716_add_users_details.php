<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->string('address');
            $table->string('pesel');
            $table->string('phone');
            $table->string('status');
            $table->string('type');
            $table->string('car');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn('address');
            $table->dropColumn('pesel');
            $table->dropColumn('phone');
            $table->dropColumn('status');
            $table->dropColumn('type');
            $table->dropColumn('car');
        });
    }
}
