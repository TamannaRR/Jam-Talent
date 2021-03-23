<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('language')->nullable();
            $table->text('sort_description')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('location')->nullable();
            $table->string('slug')->nullable();
            $table->integer('hourly_rate')->nullable();
            $table->string('file')->nullable();
            $table->string('password');
            $table->integer('verified')->default(0)->coment('1 equal verified 0 equal non verified');
            $table->integer('user_type_id')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
