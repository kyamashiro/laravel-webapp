<?php
/**
 * Created by PhpStorm.
 * User: kyamashiro
 * Date: 2019/02/23
 * Time: 15:20
 */

namespace App\Services;


use App\Customer;

class CustomerService
{
    public function getCustomers()
    {
        return Customer::query()->select(['id', 'name'])->get();
    }

    public function addCustomer($name)
    {
        $customer = new Customer();
        $customer->name = $name;
        $customer->save();
    }
}
