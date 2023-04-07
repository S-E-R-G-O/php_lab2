<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("document_id");
            $table->unsignedBigInteger("tag_id");

            $table->index('document_id', 'document_tag_document_idx');
            $table->index('tag_id', 'document_tag_tag_idx');

            $table->foreign('document_id', 'document_tag_document_fk')->on('documents')->references('id');
            $table->foreign('tag_id', 'document_tag_tag_fk')->on('tags')->references('id');

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
        Schema::dropIfExists('document_tags');
    }
};
