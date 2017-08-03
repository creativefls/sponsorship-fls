<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Carbon\Carbon;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        //insert default user
        $current_time = Carbon::now();
        DB::table('users')->insert([
            'name' => 'admin bawaan default',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 0,
            'created_at' => $current_time,
            'updated_at' => $current_time,
        ]);
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
