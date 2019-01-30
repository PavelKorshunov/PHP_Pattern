<?php
require 'classes/Factory.php';
require 'classes/Product.php';

Factory::pushProduct(new Product('first'));
Factory::pushProduct(new Product('second'));

print_r(Factory::getProduct('first')->getId());
// first
print_r(Factory::getProduct('second')->getId());
// second