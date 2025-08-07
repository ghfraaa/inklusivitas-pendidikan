<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration {

    public function up()
    {
        DB::statement("ALTER TABLE users MODIFY role ENUM('admin', 'coordinator', 'student') DEFAULT 'student'");
    }

    public function down()
    {
        DB::statement("ALTER TABLE users MODIFY role ENUM('admin', 'coordinator') DEFAULT 'coordinator'");
    }

};
