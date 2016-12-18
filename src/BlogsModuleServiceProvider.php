<?php namespace Anomaly\BlogsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class BlogsModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    protected $routes = [];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [
      'Anomaly\Streams\Platform\Model\Blogs\BlogsBlogsEntryModel' => 'Anomaly\BlogsModule\Blog\BlogModel',
      'Anomaly\Streams\Platform\Model\Blogs\BlogsCategoriesEntryModel' => 'Anomaly\BlogsModule\Category\CategoryModel',
    ];

    protected $providers = [];

    protected $singletons = [
      'Anomaly\BlogsModule\Blog\Contract\BlogRepositoryInterface'         => 'Anomaly\BlogsModule\Blog\BlogRepository',
      'Anomaly\BlogsModule\Type\Contract\TypeRepositoryInterface'         => 'Anomaly\BlogsModule\Type\TypeRepository',
      'Anomaly\BlogsModule\Category\Contract\CategoryRepositoryInterface' => 'Anomaly\BlogsModule\Category\CategoryRepository',
    ];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
