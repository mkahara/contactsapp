<?php

namespace App\Http\Requests;

use  Illuminate\Http\Request;
use App\Contact;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->contact)
        {
            if($this->user()->user_type=='0') return true;

            return Contact::where('id', $this->blog)
                ->where('user_id', $this->user()->id)->exists();
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];
    }
}
