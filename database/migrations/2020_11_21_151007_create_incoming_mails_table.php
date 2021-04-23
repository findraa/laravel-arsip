<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_mails', function (Blueprint $table) {
            $table->id();
            $table->string('file_number')->unique();
            $table->string('sender')->nullable()->default('-');
            $table->string('letter_date');
            $table->string('letter_number');
            $table->string('subject')->nullable()->default('-');
            $table->string('datetime')->nullable()->default('-');
            $table->string('description')->nullable()->default('-');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('incoming_mails');
    }
}
