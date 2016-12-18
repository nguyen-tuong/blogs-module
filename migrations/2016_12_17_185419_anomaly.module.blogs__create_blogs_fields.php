<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleBlogsCreateBlogsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
      'str_id'           => 'anomaly.field_type.text',
      'name'             => 'anomaly.field_type.text',
      'title'            => 'anomaly.field_type.text',
      'slug'             => [
          'type'   => 'anomaly.field_type.slug',
          'config' => [
              'slugify' => 'title',
              'type'    => '-',
          ],
      ],
      'content'          => [
          'type'   => 'anomaly.field_type.wysiwyg',
          'locked' => 0, // Used with seeded pages.
      ],
      'type'             => [
          'type'   => 'anomaly.field_type.relationship',
          'config' => [
              'related' => 'Anomaly\BlogsModule\Type\TypeModel',
          ],
      ],
      'tags'             => 'anomaly.field_type.tags',
      'summary'          => 'anomaly.field_type.textarea',
      'description'      => 'anomaly.field_type.textarea',
      'publish_at'       => 'anomaly.field_type.datetime',
      'author'           => [
          'type'   => 'anomaly.field_type.relationship',
          'config' => [
              'mode'    => 'lookup',
              'related' => 'Anomaly\UsersModule\User\UserModel',
          ],
      ],
      'category'         => [
          'type'   => 'anomaly.field_type.relationship',
          'config' => [
              'related' => 'Anomaly\BlogsModule\Category\CategoryModel',
          ],
      ],
      'enabled'          => [
          'type'   => 'anomaly.field_type.boolean',
          'config' => [
              'default_value' => false,
          ],
      ],
      'featured'         => [
          'type'   => 'anomaly.field_type.boolean',
          'config' => [
              'default_value' => false,
          ],
      ],
      'meta_title'       => 'anomaly.field_type.text',
      'meta_description' => 'anomaly.field_type.textarea',
      'meta_keywords'    => 'anomaly.field_type.tags',
      'ttl'              => [
          'type'   => 'anomaly.field_type.integer',
          'config' => [
              'min'  => 0,
              'step' => 1,
              'page' => 5,
          ],
      ],
    ];

}
