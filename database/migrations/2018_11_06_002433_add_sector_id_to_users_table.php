<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSectorIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'sector_id')) {
                $table->smallInteger('sector_id')->unsigned();
                $table->foreign('sector_id')->references('id')->on('sector');
            }
        });
        //ou tente isto 
        //desconmentar todo o código abaixo e comentar o bloco Schema acima
        // Schema::table('users', function (Blueprint $table) {
        //     if (!Schema::hasColumn('users', 'sector_id')) {
        //         $table->smallInteger('sector_id')->unsigned();
        //     }
        // });

        // Schema::table('users', function (Blueprint $table) {
        //     if (!Schema::hasColumn('users', 'sector_id')) {
        //         $table->foreign('sector_id')->references('id')->on('sector');
        //     }
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'sector_id')) {
                $table->dropColumn('sector_id');
            }
        });
    }
}
