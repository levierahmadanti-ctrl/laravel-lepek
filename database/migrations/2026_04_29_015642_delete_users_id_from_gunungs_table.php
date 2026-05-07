<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
    {
        Schema::table('gunungs', function (Blueprint $table) {
              $table->dropForeign(['gunungs_id']);
              $table->dropForeign(['users_id']);

            $table->dropColumn('gunungs_id');
            $table->dropColumn('users_id');
        });
    }

    public function down(): void
    {
        Schema::table('gunungs', function (Blueprint $table) {
            $table->unsignedBigInteger('gunungs_id')->nullable();

            $table->foreign('gunungs_id')
                  ->references('id')
                  ->on('gunungs')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('users_id')->nullable();

            $table->foreign('users_id')
                  ->references('id')
                  ->on('gunungs')
                  ->onDelete('cascade');
        
            $table->id('gunungs_id');
             $table->id('users_id'); // balikin lagi kalau rollback
        });
    }

    
};
