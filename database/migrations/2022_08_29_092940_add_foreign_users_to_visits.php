<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// DODAWANIE KLUCZA USERS (user_id) DO TABELI VISITS

class AddForeignUsersToVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->change(); //Zmiana formatu id dla user_id(int11) na (bigint20)
            $table->foreign('user_id', 'visits_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropForeign('visits_user_id_foreign');
        });
    }
}
