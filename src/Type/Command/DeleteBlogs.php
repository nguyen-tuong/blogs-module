<?php namespace Anomaly\BlogsModule\Type\Command;
use Anomaly\BlogsModule\Blog\Contract\BlogRepositoryInterface;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
/**
 * Class DeleteBlogs
 */
class DeleteBlogs
{

    /**
     * The post type instance.
     *
     * @var TypeInterface
     */
    protected $type;

    /**
     * Create a new DeleteTypeStream instance.
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
     * @param PostRepositoryInterface $posts
     */
    public function handle(BlogRepositoryInterface $blogs)
    {
        foreach ($this->type->getPosts() as $post) {
            $blogs->delete($post);
        }
    }
}
