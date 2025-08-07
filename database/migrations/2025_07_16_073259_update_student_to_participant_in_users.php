<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('users')
            ->where('role', 'student')
            ->update(['role' => 'participant']);
    }

    public function down()
    {
        DB::table('users')
            ->where('role', 'participant')
            ->update(['role' => 'student']);
    }

};
