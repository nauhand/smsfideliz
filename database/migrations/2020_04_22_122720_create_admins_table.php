<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Admin;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('image')->default('user.png');
            $table->string('role')->default('admin');
            $table->timestamps();
        });

        Admin::create([
            'nom'=>'Codo',
            'prenoms'=>'Noel Loic',
            'telephone'=>'+22578965424',
            'email'=>'codonoel@com-tic.afica',
            'username'=>'codo',
            'password'=>Hash::make('codonoel'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
