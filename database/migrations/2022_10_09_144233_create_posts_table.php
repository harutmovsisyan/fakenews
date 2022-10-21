<?php

namespace App\Models;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('owner_id');
            $table->foreignIdFor(Category::class, 'category_id')->nullable()->index()->constrained();;
            $table->boolean('is_published');
            $table->softDeletes('deleted_at');
            $table->timestamps();

//            $table->index('category_id', 'post_category_idx');
//            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
        });
    }

//    title | content | category | author | photo | tags | timestamp

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
