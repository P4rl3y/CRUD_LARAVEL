<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'lastName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'streetName' => 'required',
            'postCode' => 'required',
            'country' => 'required',
            'purchaseDate' => 'required',
            'creditCardType' => 'required',
            'creditCardNumber' => 'required',
            'creditCardExpirationDate' => 'required',
            'userName' => 'required',
            'password' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ];
    }
}
