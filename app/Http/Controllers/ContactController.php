<?php

namespace App\Http\Controllers;

use App\Mail\ContactInformationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ContactController extends Controller
{
    private array $rule = [
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'company_name' => 'nullable|string',
            'job_title' => 'required|string',
            'business_email' => 'required|email',
            'country' => 'required|string',
            'message' => 'required|string'
        ];

    public function sendNotification(Request $request) {

        try {
            $validator = Validator::make($request->all(), $this->rule);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors());
            }

            Mail::to('dasaoptima@gmail.com')->send(new ContactInformationMail($request->all()));

            return response()->json(['response' => 'success']);
        } catch (\Throwable $th) {
            return response()->json(['response' => 'error'], 400);
        }
    }
}
