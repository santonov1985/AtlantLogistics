<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug')->unique();
            $table->string('resource', 20)->default('System');
            $table->boolean('system')->default(0);
            $table->timestamps();
        });

        if ( Schema :: hasTable( 'permissions' )) {
            DB :: table( 'permissions' ) -> insert([

                //NotaryTable
                [
                    'name' => 'View NotaryTable',
                    'slug' => 'notary_table.view',
                    'resource' => 'NotaryTable',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Create NotaryTable',
                    'slug' => 'notary_table.create',
                    'resource' => 'NotaryTable',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Update NotaryTable',
                    'slug' => 'notary_table.update',
                    'resource' => 'NotaryTable',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Delete NotaryTable',
                    'slug' => 'notary_table.delete',
                    'resource' => 'NotaryTable',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Restore NotaryTable',
                    'slug' => 'notary_table.restore',
                    'resource' => 'NotaryTable',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]);
        }
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permissions');
    }
}
