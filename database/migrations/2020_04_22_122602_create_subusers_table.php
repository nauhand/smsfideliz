<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Subuser;

class CreateSubusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subusers', function (Blueprint $table) {
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
            $table->string('role')->default('sous-compte');
            $table->timestamps();
        });

        Subuser::create([
            'nom'=>'Sana',
            'prenoms'=>'Michael',
            'telephone'=>'+22578986545',
            'email'=>'sanamichael@com-tic.afica',
            'username'=>'sana',
            'password'=>Hash::make('sanamichael'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subusers');
    }
}
