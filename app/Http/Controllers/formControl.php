<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class formControl extends Controller
{
    function create(){

        $url=url('/form/create');
        $title="Customer Registations";
        $Enter="Submit";
        $method='POST';

        $data=compact('url','title','Enter','method');
        return view('/form')->with($data);
    }

    function store(Request $request){

    //     p($request->all());
    //  die;
        
      $request->validate(
                   array(
    'name'=>'required',
    'password'=>'required|confirmed',
    'password_confirmation'=>'required',
    'email'=>'required|email',
    'city'=>'required',
    'state'=>'required',
    'mobile_no'=>'required',
    'country'=>'required'

) );
        // print_r($request->all());

        $customer=new Customer();
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->password=md5($request['password']);
        $customer->gender=$request['gender'];
        $customer->mobile_no=$request['mobile_no'];
        $customer->city=$request['city'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->save();

        return redirect()->route('form');

    }


    public function view(){

        $customer=Customer::all();
        // echo"<pre";
        // print_r($customer);
        // echo"</pre>";
        // exit;
        return view('CustomerViews',compact('customer'));
        
    
    }

    
    public function edit($id){

        $customer=Customer::find($id);
        if(is_null($customer))
        {
           return redirect()->route('customers');
        }
        else{
            $title="Customer Updates";
            $url=url('/form/update')."/".$id;
            $Enter="save";
            $method='POST';
            return view('form',compact('title','url','Enter','method','customer'));
        }
    }

    public function update(Request $request,$id){

        $customer=Customer::find($id);
        // echo"<pre";
        // print_r($customer);
        // echo"</pre>";
        // exit;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->mobile_no=$request['mobile_no'];
        $customer->city=$request['city'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->save();
    
        return redirect()->route('customers');
        
    }

    public function delete($id){

        Customer::find($id)->delete();
     
        return redirect()->back();
     
         }
     
}



