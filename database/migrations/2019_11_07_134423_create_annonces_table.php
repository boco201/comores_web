<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('identite_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('valides')->default(0);
            $table->string('title');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('photo')->nullable();
            $table->string('media')->nullable();
            $table->string('upload')->nullable();
            $table->string('fichier')->nullable();
            $table->text('description');
            $table->decimal('price', 8,2);
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
        Schema::dropIfExists('annonces');
    }
}
