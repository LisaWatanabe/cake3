<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Customer extends Entity
{
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'telephone_number' => true,
        'mailaddress' => true,
        'created' => true,
        'modified' => true
    ];
}
