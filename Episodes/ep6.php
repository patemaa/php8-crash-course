<?php

class Invoice
{
//    protected $description;
//    protected $total;
//    protected $date;
//    protected $paid;

    public function __construct(protected $description, protected $total, protected $date, protected $paid)
    {
//        $this->description = $description;
//        $this->total = $total;
//        $this->date = $date;
//        $this->paid = $paid;
    }
}

$invoice = new Invoice(
    description: 'Customer installation',
    total: 100000,
    date: new DateTime(),
    paid: true
);

var_dump($invoice);

// Named parameters, allows you to pass function arguments according to, not their order, but the parameter name, itself.