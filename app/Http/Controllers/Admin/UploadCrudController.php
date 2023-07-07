<?php

namespace App\Http\Controllers\Admin;

use App\Models\Upload;

use App\Http\Requests\UploadRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UploadCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UploadCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        $this->crud->setModel(\App\Models\Upload::class); // Make sure the path to the model class is correct.
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/upload');
        $this->crud->setEntityNameStrings('upload', 'Uploads');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - $this->crud->column('price')->type('number');
         * - $this->crud->addColumn(['name' => 'price', 'type' => 'number']); 
         */
        $this->crud->column('id');
        $this->crud->addColumn([
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'image',
            'prefix' => 'storage/',
            'height' => '50px',
            'width'  => '50px',
        ]);
        $this->crud->column('text');
        $this->crud->column('type');
    }


    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {

        $this->crud->removeField('image'); // Remove the previous image field definition

        $this->crud->addField([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'width' => '50px',
            'height' => '50px',
            'upload'    => true,
        ]);

        $this->crud->field('text');
        $this->crud->addField([
            'name'        => 'type',
            'label'       => "Type",
            'type'        => 'select_from_array',
            'options'     => ['--------', 'Facebook Login', 'Uid Login', 'Nothing'],
            'allows_null' => false,
            'default'     => 'one',
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
