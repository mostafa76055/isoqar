<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('tele');
            $table->string('email');
            $table->string('contact');
            $table->string('fax');
            $table->string('website');
            $table->string('position');
            $table->string('postcode');
            $table->string('address');
            $table->text('question1');
            $table->text('question2');
            $table->text('question3');
            $table->text('question4');
            $table->text('question5');
            $table->text('question6');
            $table->text('question7');
            $table->text('question8');
            $table->text('question9');
            $table->text('question10');
            $table->text('question11');
            $table->text('question12');
            $table->text('question13');
            $table->text('question14');
            $table->text('question15');
            $table->text('question16');
            $table->text('question17');
            $table->text('question18');
            $table->text('question19');
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
        Schema::dropIfExists('clients');
    }
}
