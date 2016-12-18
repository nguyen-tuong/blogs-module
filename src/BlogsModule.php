<?php namespace Anomaly\BlogsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class BlogsModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
      'blogs'      => [
          'buttons' => [
              'new_post' => [
                  'data-toggle' => 'modal',
                  'data-target' => '#modal',
                  'href'        => 'admin/blogs/ajax/choose_type',
              ],
          ],
      ],
      'categories' => [
          'buttons' => [
              'new_category',
          ],
      ],
      'types'      => [
          'buttons' => [
              'new_type',
              'assign_fields' => [
                  'data-toggle' => 'modal',
                  'data-target' => '#modal',
                  'enabled'     => 'admin/blogs/types/assignments/*',
                  'href'        => 'admin/blogs/types/choose/{request.route.parameters.id}',
              ],
          ],
      ],
      'fields'     => [
          'buttons' => [
              'new_field' => [
                  'data-toggle' => 'modal',
                  'data-target' => '#modal',
                  'href'        => 'admin/blogs/fields/choose',
              ],
          ],
      ],
    ];
}
