<?php


namespace App\Services;


use App\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerService
{
    protected $customerRepo;
    function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }
    function getAll()
    {
        return $this->customerRepo->getAll();
    }
    function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->email = $request->email;
        $this->customerRepo->save($customer);
    }
    function getCustomer($id)
    {
        return $this->customerRepo->getCustomer($id);
    }
    function update(Request $request, $id)
    {
        $customer = $this->customerRepo->getCustomer($id);
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->email = $request->email;
        $this->customerRepo->save($customer);
    }
}
