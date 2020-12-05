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
        /**
         * -------------------------------
         * Creating A Users Table
         * -------------------------------
         * @description
         * This Migration is for setting up the users table in the database for,
         * users registration, and for the login methods.
         * ---
         * @author Tristan Elliott
         * @version 1.0.0
         * @since 1.0.0
         */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            /**
             * -------------------------------
             * Required Fields
             * -------------------------------
             * These fields are required for the users registration.
             * @link Laravel Database-Migration https://laravel.com/docs/8.x/migrations
             * @version 1.0.0
             */
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            /**
             * -------------------------------
             * Additional Fields (Information)
             * -------------------------------
             * These fields are not required to be filled out and by default they are null
             * when the user reqisters these fields are not required. Update them from the
             * users profile page.
             * ---
             * @version 1.0.0
             * @since 1.0.0
             */
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('biography')->nullable();
            /**
             * -------------------------------
             * Hidden Fields
             * -------------------------------
             * These Fields are hidden from the user and can not be edited by the user,
             * only the application can update these fields.
             * ---
             * @version 1.0.0
             * @since 1.0.0
             */
            $table->string('api_token');
            $table->rememberToken();
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
