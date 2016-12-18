<?php namespace Anomaly\BlogsModule\Type\Command;
use Anomaly\BlogsModule\Type\Command\GetTypePath;
use Anomaly\BlogsModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Ui\Breadcrumb\BreadcrumbCollection;
use Illuminate\Foundation\Bus\DispatchesJobs;
/**
 * Class AddTypeBreadcrumb
 */
 class AddTypeBreadcrumb
 {

     use DispatchesJobs;

     /**
      * The type instance.
      *
      * @var TypeInterface
      */
     protected $type;

     /**
      * Create a new AddTypeBreadcrumb instance.
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
      * @param BreadcrumbCollection $breadcrumbs
      */
     public function handle(BreadcrumbCollection $breadcrumbs)
     {
         $breadcrumbs->add(
             $this->type->getName(),
             $this->dispatch(new GetTypePath($this->type))
         );
     }
   }
