<?php 

use App\CustomClass\DatabaseMigration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFlagsTable extends Migration 
{
    /**
     * Run migrations 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('flags', function (Blueprint $table) {
            $table->increments('challengeid');
            $table->string('flag');
        });

        DB::table('flags')->insert(DatabaseMigration::flags());
    }

    /**
     * Reverse migrations 
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flags');
    }
}