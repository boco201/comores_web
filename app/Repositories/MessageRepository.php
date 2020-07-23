<?php

namespace App\Repositories;

use App\Message;

class MessageRepository
{
    /**
     * Create a message.
     *
     * @param Array $data
     */
    public function create($data)
    {
        return Message::create($data);
    }
}
