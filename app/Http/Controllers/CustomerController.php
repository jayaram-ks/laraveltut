<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
	public function __construct()
    {
        //$this->middleware('auth');
    }
    public function customer($id)
    {
    	$customer = Customer::find($id);
    	return view('customer',array('customer'=>$customer));
    }
    public function createcustomer()
    {
    	return view('createcustomer');
    }
    public function insertcustomer(Request $request)
    {
    	$customer = new Customer;
    	$customer->name = $request->cname;
    	$customer->save();
    	echo "Inserted New Customer";
    }
    public function updatecustomer(Request $request,$id)
    {
        $customer = Customer::find($id);
        $customer->name=$request->cname;
        $customer->save();
        echo " Updated Customer ";
    }
    public function deletecustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        //Customer::destroy($id);
        echo " Deleted Customer ";
    }
    
}
