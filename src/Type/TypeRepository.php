<?php namespace Anomaly\BlogsModule\Type;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
use Anomaly\BlogsModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TypeRepository extends EntryRepository implements TypeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TypeModel
     */
    protected $model;

    /**
     * Create a new TypeRepository instance.
     *
     * @param TypeModel $model
     */
    public function __construct(TypeModel $model)
    {
        $this->model = $model;
    }
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
