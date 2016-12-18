<?php namespace Anomaly\BlogsModule\Type\Contract;

/*
 * Interface TypeInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PostsModule\Type\Contract
 */
use Anomaly\BlogsModule\Blog\BlogCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Interface TypeInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
interface TypeInterface extends EntryInterface
{

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get the related stream.
     *
     * @return StreamInterface
     */
    public function getEntryStream();

    /**
     * Get the related stream's
     * entry model name.
     *
     * @return string
     */
    public function getEntryModelName();

    /**
     * Get the theme layout.
     *
     * @return string
     */
    public function getThemeLayout();

    /**
     * Get related Blogs.
     *
     * @return PostCollection
     */
    public function getBlogs();

    /**
     * Return the Blogs relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs();
}
