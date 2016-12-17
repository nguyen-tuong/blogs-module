<?php

return [
    'admin/blogs' => 'Anomaly\BlogsModule\Http\Controller\Admin\BlogsController@index',
    'admin/blogs/create' => 'Anomaly\BlogsModule\Http\Controller\Admin\BlogsController@create',
    'admin/blogs/edit/{id}' => 'Anomaly\BlogsModule\Http\Controller\Admin\BlogsController@edit'
];
