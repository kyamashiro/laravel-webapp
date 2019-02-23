<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function getCustomers(CustomerService $customerService)
    {
        return response()->json($customerService->getCustomers());
    }

    public function postCustomer(Request $request, CustomerService $customerService)
    {
        $this->validate(
            $request,
            ['name' => 'required']
        );

        $customerService->addCustomer($request->json('name'));
    }

    public function getCustomer()
    {

    }

    public function putCustomer()
    {

    }

    public function deleteCustomer()
    {

    }

    public function getReports()
    {

    }

    public function postReport()
    {

    }

    public function getReport()
    {

    }

    public function putReport()
    {

    }

    public function deleteReport()
    {

    }
}
