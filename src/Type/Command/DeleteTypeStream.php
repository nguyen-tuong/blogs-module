<?php namespace Anomaly\BlogsModule\Type\Command;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
/**
 * Class DeleteTypeStream
 */
 class DeleteTypeStream
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
      * @param StreamRepositoryInterface $streams
      */
     public function handle(StreamRepositoryInterface $streams)
     {
         if (!$this->type->isForceDeleting()) {
             return;
         }

         $streams->delete($streams->findBySlugAndNamespace($this->type->getSlug() . '_blogs', 'blogs'));
     }
 }
