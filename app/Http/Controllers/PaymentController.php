<?php

namespace App\Http\Controllers;

use App\PaymentRecord;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function store(Request $request)
   {
       $user = new PaymentRecord();
       $user->m_name = $request->input('pname');
       $user->m_price = $request->input('pprice');
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->Account_no = $request->input('ano');
       $user->Account_password = $request->input('apass');

       $user->save();

       return  redirect('doctor');

   }

}
