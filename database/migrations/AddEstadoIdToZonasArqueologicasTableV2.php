
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstadoIdToZonasArqueologicas extends Migration
{
    public function up()
    {
        Schema::table('zonas_arqueologicas', function (Blueprint $table) {
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    public function down()
    {
        Schema::table('zonas_arqueologicas', function (Blueprint $table) {
            $table->dropColumn('estado_id');
        });
    }
}
