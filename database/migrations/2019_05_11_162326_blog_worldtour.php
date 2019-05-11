<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogWorldtour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_worldtour', function (Blueprint $table) {
            $table->string('id')->index();
            $table->string('username');
            $table->string('title');
            $table->string('blogpost');
            $table->string('month');
            $table->date('date');
            $table->string('photolink');
            $table->string('place');
            $table->string('town');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('private');
            $table->string('town');
            $table->string('photoname');
            $table->string('alttext');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
