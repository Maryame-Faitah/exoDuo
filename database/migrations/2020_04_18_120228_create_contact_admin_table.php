<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactAdmin', function (Blueprint $table) {
            $table->id();
            $table->string('iconAdress', 30);
            $table->string('adress', 100);
            $table->string('iconEmail', 30);
            $table->string('email', 50);
            $table->string('iconPhone', 30);
            $table->string('phone', 20);
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
        Schema::dropIfExists('contactAdmin');
    }
}
