<?php namespace Anomaly\BlogsModule\Type\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class TypeTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
      'search' => [
            'fields' => [
                'name',
                'slug',
                'description',
            ],
        ],
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
      'name',
      'description',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
      'edit',
      'assignments',
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [
       'sortable' => true,
    ];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
