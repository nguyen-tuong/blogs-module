<?php namespace Anomaly\BlogsModule\Type;

use Anomaly\EditorFieldType\EditorFieldType;
use Anomaly\BlogsModule\Blog\BlogCollection;
use Anomaly\BlogsModule\Type\Command\GetTypeStream;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Model\Blogs\BlogsTypesEntryModel;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Class TypeModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class TypeModel extends BlogsTypesEntryModel implements TypeInterface
{

    /**
     * The cache time.
     *
     * @var int
     */
    protected $cacheMinutes = 99999;

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->desciption;
    }

    /**
     * Get the related entry stream.
     *
     * @return StreamInterface
     */
    public function getEntryStream()
    {
        return $this->dispatch(new GetTypeStream($this));
    }

    /**
     * Get the related entry model name.
     *
     * @return string
     */
    public function getEntryModelName()
    {
        $stream = $this->getEntryStream();

        return $stream->getEntryModelName();
    }

    /**
     * Get the theme layout.
     *
     * @return string
     */
    public function getThemeLayout()
    {
        return $this->theme_layout;
    }

    /**
     * Get related blogs.
     *
     * @return BlogCollection
     */
    public function getBlogs()
    {
        return $this->blogs;
    }

    /**
     * Return the blogs relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany('Anomaly\BlogsModule\Blog\BlogModel', 'type_id');
    }
}
