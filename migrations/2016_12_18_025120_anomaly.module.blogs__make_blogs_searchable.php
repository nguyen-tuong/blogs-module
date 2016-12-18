<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleBlogsMakeBlogsSearchable extends Migration
{

    /**php artisan make:migration make_blogs_searchable --addon=blogs
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->fields()->create([]);
        // $this->streams()->create([]);
        // $this->assignments()->create([]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
