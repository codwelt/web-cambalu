<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostColumDeleteNombre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn("nombre");
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->renameColumn("correo","whatsapp");
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string("nombre");
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->renameColumn("whatsapp","correo");
        });


    }
}
