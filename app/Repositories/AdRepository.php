<?php

namespace App\Repositories;

use App\Annonce;

class AdRepository
{
     
     /**
     * Get an ad by id.
     *
     * @param integer $id
     */
    public function getById($id)
    {
        return Annonce::find($id);
    }

    /**
     * Create an ad.
     *
     * @param Array $data
     */
    public function create($data)
    {
        return Annonce::create($data);
    }
}


