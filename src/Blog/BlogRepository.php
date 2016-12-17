<?php namespace Anomaly\BlogsModule\Blog;

use Anomaly\BlogsModule\Blog\Contract\BlogRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BlogRepository extends EntryRepository implements BlogRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BlogModel
     */
    protected $model;

    /**
     * Create a new BlogRepository instance.
     *
     * @param BlogModel $model
     */
    public function __construct(BlogModel $model)
    {
        $this->model = $model;
    }
}
