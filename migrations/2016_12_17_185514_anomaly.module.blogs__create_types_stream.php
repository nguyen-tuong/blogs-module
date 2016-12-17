<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleBlogsCreateTypesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'types'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [];

}
