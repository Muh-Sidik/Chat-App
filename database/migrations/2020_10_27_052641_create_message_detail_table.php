<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_detail', function (Blueprint $table) {
            $table->id();
            $table->string('name_room');
            $table->foreignId('id_room')->constrained('message_room');
            $table->foreignId('id_user_from')->constrained('users');
            $table->foreignId('id_user_to')->constrained('users');
            $table->longText('body_chat');
            $table->tinyInteger('status')->default(0);
            $table->string('file')->nullable();
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
        Schema::dropIfExists('message_detail');
    }
}
