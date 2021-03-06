<?php

namespace App\Entities;

use CodeIgniter\Entity;

class TaxonomyElearningEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function getLink()
    {
        return base_url(route_to('objects_category', $this->_id));
    }
}
