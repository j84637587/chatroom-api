<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 50);
            $table->string('password', 300)->nullable()->comment('房間密碼,空值為無密碼');
            $table->string('description', 500)->nullable()->comment('介紹');
            $table->string('cover_image', 200);
            $table->tinyInteger('is_visible')->comment('是否可被搜尋 可(1) 不可(0)');
            $table->smallInteger('status')->default(1)->comment('狀態 開啟(1) 關閉(0)');
            $table->string('created_by')->comment('創立者');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_rooms');
    }
}
