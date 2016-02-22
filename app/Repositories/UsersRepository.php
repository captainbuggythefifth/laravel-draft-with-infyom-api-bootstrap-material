<?php

namespace App\Repositories;

use App\Models\Users;
use InfyOm\Generator\Common\BaseRepository;

class UsersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "name",
		"email"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Users::class;
    }
}
