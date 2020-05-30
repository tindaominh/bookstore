<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BinhLuanRequest extends FormRequest
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

  
    public function rules()
    {
        return [
            'email' => 'required',
            'noi_dung' => 'required',
            'hinh' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ];
    }

    public function messages() {
        return [
           
            'email.required' => 'Vui lòng nhập email',
            'noi_dung.required' => 'Vui lòng nhập nội dung',
            'hinh.required'  => 'Vui lòng chọn file hình',
        ];
    }

    public function attribute() {

    }
}
