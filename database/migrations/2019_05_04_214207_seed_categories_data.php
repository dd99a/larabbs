<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => 'Share',
                'description' => 'Share ideas',
            ],
            [
                'name'        => 'Tutorial',
                'description' => 'Tutorial',
            ],
            [
                'name'        => 'Answer',
                'description' => 'Answer and Question',
            ],
            [
                'name'        => 'Publish',
                'description' => 'Publish',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
