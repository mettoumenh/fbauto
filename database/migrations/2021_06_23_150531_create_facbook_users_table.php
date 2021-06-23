<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacbookUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facbook_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->text('email');
            $table->text('password');
            $table->date('create_date');
            $table->date('date_of_birth');
            $table->text('telephone');
            $table->text('proxy')->nullable();
            $table->bigInteger('country_id');
            $table->boolean('status');
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
        Schema::dropIfExists('facbook_users');
    }
}
