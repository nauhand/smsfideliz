<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

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
            $table->string('nom');
            $table->string('prenoms');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('pays')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('image')->default('user.png');
            $table->string('role')->default('client');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'nom'=>'Allou',
            'prenoms'=>'Olivier Nauhand',
            'telephone'=>'+22549490022',
            'email'=>'allounauhand@com-tic.afica',
            'username'=>'nauhand',
            'password'=>Hash::make('allounauhand'),
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
