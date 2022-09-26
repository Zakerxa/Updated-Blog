<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id()->from(100);
            $table->text('title');
            $table->text('pimg')->nullable();
            $table->text('fimg')->nullable();
            $table->text('simg')->nullable();
            $table->text('timg')->nullable();
            $table->text('foimg')->nullable();
            $table->text('fiimg')->nullable();
            $table->mediumText('fcontent')->nullable();
            $table->mediumText('scontent')->nullable();
            $table->mediumText('tcontent')->nullable();
            $table->mediumText('focontent')->nullable();
            $table->mediumText('ficontent')->nullable();
            $table->mediumText('sicontent')->nullable();
            $table->mediumText('secontent')->nullable();
            $table->string('link')->nullable();
            $table->foreignId('category_id');
            $table->string('blog_id')->nullable();
            $table->string('views')->nullable();
            $table->timestamp('created_date');
            $table->timestamp('modified_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
