<?php namespace Anomaly\BlogsModule\Type\Command;

use Anomaly\BlogsModule\Blog\Contract\BlogInterface;
use Anomaly\BlogsModule\Blog\Contract\BlogRepositoryInterface;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
use Anomaly\BlogsModule\Type\Contract\TypeRepositoryInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdatePosts
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class UpdateBlogs
{

    use DispatchesJobs;

    /**
     * The post type instance.
     *
     * @var TypeInterface
     */
    protected $type;

    /**
     * Update a new UpdatePosts instance.
     *
     * @param TypeInterface $type
     */
    public function __construct(TypeInterface $type)
    {
        $this->type = $type;
    }

    /**
     * Handle the command.
     *
     * @param TypeRepositoryInterface $types
     * @param PostRepositoryInterface $posts
     */
    public function handle(TypeRepositoryInterface $types, BlogRepositoryInterface $blogs)
    {
        /* @var TypeInterface $type */
        $type = $types->find($this->type->getId());

        /* @var BlogInterface $post */
        foreach ($type->getBlogs() as $blog) {
            $blogs->save($blog->setAttribute('entry_type', $this->type->getEntryModelName()));
        }
    }
}
