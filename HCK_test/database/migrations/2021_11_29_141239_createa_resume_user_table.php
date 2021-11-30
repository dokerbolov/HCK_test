<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateaResumeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('resume_users', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('surname');
          $table->date('date_of_birth');
          $table->string('email');
          $table->bigInteger('tel_number');
          $table->timestamp('email_verified_at')->nullable();
          $table->string('description');
          $table->rememberToken();
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
        //
    }
}
