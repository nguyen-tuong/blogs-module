<?php namespace Anomaly\BlogsModule\Http\Controller\Admin;

use Anomaly\BlogsModule\Blog\Form\BlogFormBuilder;
use Anomaly\BlogsModule\Blog\Table\BlogTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BlogsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BlogTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BlogTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BlogFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BlogFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BlogFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BlogFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
