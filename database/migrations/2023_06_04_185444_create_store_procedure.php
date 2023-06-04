<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sp_get_all = "DROP PROCEDURE IF EXISTS `get_users`;
                            CREATE PROCEDURE `get_users` ()
                            BEGIN
                            select * from users;
                            END;";
                            DB::unprepared($sp_get_all);



        $sp_get_by_id = "DROP PROCEDURE IF EXISTS `get_user_by_id`;
                            CREATE PROCEDURE `get_user_by_id` (IN idx int)
                            BEGIN
                            select * from users where id = idx;
                            END;";
                            DB::unprepared($sp_get_by_id);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_procedure');
    }
};
