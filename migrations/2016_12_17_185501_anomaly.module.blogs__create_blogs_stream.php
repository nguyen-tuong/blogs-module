<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleBlogsCreateBlogsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'blogs'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [];

}
