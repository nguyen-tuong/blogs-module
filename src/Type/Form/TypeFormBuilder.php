<?php namespace Anomaly\BlogsModule\Type\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class TypeFormBuilder extends FormBuilder
{

      /**
       * The form fields.
       *
       * @var array
       */
      protected $fields = [
          '*',
          'slug' => [
              'disabled' => 'edit',
          ],
      ];

}
