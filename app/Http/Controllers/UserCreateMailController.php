<?php

namespace App\Http\Controllers;

use App\Jobs\CustomerCreateJob;
use Illuminate\Http\Request;

class UserCreateMailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new CustomerCreateJob());

        return "Email send in mailtrap.io";
    }
}
