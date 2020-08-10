<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use App\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
        $success = "Du lieu duoc xac thuc thanh cong";
        return view('welcome', compact('success'));
    }

}
