<?php

namespace Acme\App;


use Acme\App\Repositories\AddressArrayRepository;

class Address
{
    use \Acme\App\Traits\Accessible;

    protected $street;
    protected $city;
    protected $addresRepository;

    public function __construct(AddressArrayRepository $addressRepository){
        $this->addresRepository = $addressRepository;

        $this->fillable[] = 'street';
        $this->fillable[] = 'city';
        $this->accessible[] = 'street';
        $this->accessible[] = 'city';
    }

    public function Find($id)
    {
        $result = $this->addresRepository->Find($id);

        foreach ($result as $key => $value){
            $this->$key = $value;
        }
        return $this;
    }

}