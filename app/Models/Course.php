<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

class Course extends Resources
{
    protected $table = 'course';

    protected $rules = array();

    protected $structures = array(
        "id" => [
            'name' => 'id',
            'default' => null,
            'label' => 'ID',
            'display' => false,
            'validation' => [
                'create' => null,
                'update' => null,
                'delete' => null,
            ],
            'primary' => true,
            'required' => true,
            'type' => 'integer',
            'validated' => false,
            'nullable' => false,
            'note' => null
        ],
        "name" => [
            'name' => 'name',
            'default' => null,
            'label' => 'Name',
            'display' => true,
            'validation' => [
                'create' => 'required|string',
                'update' => 'required|string',
                'delete' => null,
            ],
            'primary' => false,
            'required' => true,
            'type' => 'text',
            'validated' => true,
            'nullable' => false,
            'note' => 'name lengkap',
            'placeholder' => 'Name',
        ],
        "lecture_id" => [
            'name' => 'lecture_id',
            'default' => null,
            'label' => 'Lecture',
            'display' => true,
            'validation' => [
                'create' => 'required|integer',
                'update' => 'required|integer',
                'delete' => null,
            ],
            'primary' => false,
            'required' => true,
            'type' => 'reference',
            'validated' => true,
            'nullable' => false,
            'note' => null,
            'placeholder' => 'Lecture',
            'reference' => "Lecture",
            'relationship' => 'lecture',
            'option' => [
                'value' => 'id',
                'label' => 'name'
            ]
        ],
        "students_id" => [
            'name' => 'students_id',
            'default' => null,
            'label' => 'Students',
            'display' => true,
            'validation' => [
                'create' => 'required|integer',
                'update' => 'required|integer',
                'delete' => null,
            ],
            'primary' => false,
            'required' => true,
            'type' => 'reference',
            'validated' => true,
            'nullable' => false,
            'note' => null,
            'placeholder' => 'Students',
            'reference' => "Students",
            'relationship' => 'students',
            'option' => [
                'value' => 'id',
                'label' => 'first_name'
            ]
        ],
        "faculity_id" => [
            'name' => 'faculity_id',
            'default' => null,
            'label' => 'Faculity',
            'display' => true,
            'validation' => [
                'create' => 'required|integer',
                'update' => 'required|integer',
                'delete' => null,
            ],
            'primary' => false,
            'required' => true,
            'type' => 'reference',
            'validated' => true,
            'nullable' => false,
            'note' => null,
            'placeholder' => 'Faculity',
            'reference' => "Faculity",
            'relationship' => 'faculity',
            'option' => [
                'value' => 'id',
                'label' => 'name'
            ]
        ],
        "created_at" => [
            'name' => 'created_at',
            'default' => null,
            'label' => 'Created At',
            'display' => false,
            'validation' => [
                'create' => null,
                'update' => null,
                'delete' => null,
            ],
            'primary' => false,
            'required' => false,
            'type' => 'datetime',
            'validated' => false,
            'nullable' => false,
            'note' => null
        ],
        "updated_at" => [
            'name' => 'updated_at',
            'default' => null,
            'label' => 'Updated At',
            'display' => false,
            'validation' => [
                'create' => null,
                'update' => null,
                'delete' => null,
            ],
            'primary' => false,
            'required' => false,
            'type' => 'datetime',
            'validated' => false,
            'nullable' => false,
            'note' => null
        ],
        "deleted_at" => [
            'name' => 'deleted_at',
            'default' => null,
            'label' => 'Deleted At',
            'display' => false,
            'validation' => [
                'create' => null,
                'update' => null,
                'delete' => null,
            ],
            'primary' => false,
            'required' => false,
            'type' => 'datetime',
            'validated' => false,
            'nullable' => false,
            'note' => null
        ]
    );

    protected $forms = array(
        [
            [
                'class' => 'col-6',
                'field' => 'name'
            ],
            [
                'class' => 'col-6',
                'field' => 'lecture_id'
            ],
        ],
        [
            [
                'class' => 'col-6',
                'field' => 'students_id'
            ],
            [
                'class' => 'col-6',
                'field' => 'faculity_id'
            ],
        ],
    );

    protected $searchable = array('name');

    public function lecture()
    {
        return $this->belongsTo('App\Models\Lecture', 'lecture_id', 'id')->withTrashed();
    }

    public function students()
    {
        return $this->belongsTo('App\Models\Students', 'students_id', 'id')->withTrashed();
    }

    public function faculity()
    {
        return $this->belongsTo('App\Models\Faculity', 'faculity_id', 'id')->withTrashed();
    }
}
