<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacbookGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facbook_groups', function (Blueprint $table) {
            $table->id();
            $table->text('group_name');
            $table->text('group_uid');
            $table->bigInteger('category_id');
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
        Schema::dropIfExists('facbook_groups');
    }
}
