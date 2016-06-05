<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Post;
use App\Test;
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('content');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });

        for($i=0;$i<10;$i++){
        Post::create([
            'name'=>"test-$i",
            'slug'=>"test-$i",
            'content'=>"loremp ipsum"
            ]);
        }

        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomDuTest');
            $table->string('opif');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });

        Test::create([
            'nomDuTest'=>"tamer",
            'opif'=>"cest un test",
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
