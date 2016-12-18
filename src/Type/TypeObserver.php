<?php namespace Anomaly\BlogsModule\Type;

use Anomaly\BlogsModule\Type\Command\CreateTypeStream;
use Anomaly\BlogsModule\Type\Command\DeleteBlogs;
use Anomaly\BlogsModule\Type\Command\DeleteTypeStream;
use Anomaly\BlogsModule\Type\Command\UpdateBlogs;
use Anomaly\BlogsModule\Type\Command\UpdateStream;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

/**
 * Class TypeObserver
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class TypeObserver extends EntryObserver
{

    /**
     * Fired after a page type is created.
     *
     * @param EntryInterface|TypeInterface $entry
     */
    public function created(EntryInterface $entry)
    {
        $this->commands->dispatch(new CreateTypeStream($entry));

        parent::created($entry);
    }

    /**
     * Fired before a page type is updated.
     *
     * @param EntryInterface|TypeInterface $entry
     */
    public function updating(EntryInterface $entry)
    {
        $this->commands->dispatch(new UpdateStream($entry));
        $this->commands->dispatch(new UpdateBlogs($entry));

        parent::updating($entry);
    }

    /**
     * Fired after a page type is deleted.
     *
     * @param EntryInterface|TypeInterface $entry
     */
    public function deleted(EntryInterface $entry)
    {
        $this->commands->dispatch(new DeleteBlogs($entry));
        $this->commands->dispatch(new DeleteTypeStream($entry));

        parent::deleted($entry);
    }
}
