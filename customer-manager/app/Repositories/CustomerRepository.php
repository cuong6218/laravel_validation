<?php


namespace App\Repositories;


use App\Customer;

class CustomerRepository
{
    protected $customer;
    function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }
    function getAll()
    {
        return $this->customer->select('id', 'name', 'age', 'email')->orderBy('id', 'desc')->get();
    }
    function save($customer)
    {
        $customer->save();
    }
    function getCustomer($id)
    {
        return $this->customer->findOrFail($id);
    }
}
