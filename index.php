<?php

require 'autoload.php';

$addressRepository = new \Acme\App\Repositories\AddressArrayRepository();

$addressModel = new Acme\App\Address($addressRepository);

$address = $addressModel->Find(1);

echo '<iframe src="https://www.google.com/maps/embed?
pb=!1m18!1m12!1m3!1d3105.5761350650623!2d-77.
01122388464991!3d38.887938479572185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!
3m3!1m2!1s0x89b7b82a1fb9339b%3A0x1553a7f07d0f2a76!2z
MSBTIENhcGl0b2wgU3QgU0UsIFdhc2hpbmd0b24sIERDIDI
wNTE1LCDQodCo0JA!5e0!3m2!1sru!2sru!4v1445757942579"
width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';