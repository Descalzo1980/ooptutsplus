<?php
/**
 * Created by PhpStorm.
 * User: STAS
 * Date: 25.10.2015
 * Time: 10:35
 */

namespace Acme\App\Repositories;


class AddressArrayRepository implements AddressRepositoryInterface
{
    protected $addresses;

    public function __construct()
    {
        $this->addresses = $this->getAddressess();
    }

    public function Find($id)
    {
        if(isset($this->addresses[$id])){
            return $this->addresses[$id];
        }
        return [];
    }

    protected function getAddressess()
    {
        return [
            1 => ['street' => '1 Capitol Hill',  'city' => 'Washington'],
            2 => ['street' => '1 Euston Road', 'city' => 'London'],
            3 => ['street' => 'Dam 1', 'city' => 'Amsterdam']
        ];
    }

} 