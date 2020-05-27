<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NguoiDungRequest extends FormRequest
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
            'ho_kh' => 'required',
            'ten_kh' => 'required',
            'dia_chi' => 'required',
            'dien_thoai' => 'required|numeric|min:10',
            'email' => 'required',
        ];
    }

    public function messages() {
        return [
            'ho_kh.required' => 'Vui lòng nhập họ người nhận hàng',
            'ten_kh.required' => 'Vui lòng nhập tên người nhận hàng',
            'dia_chi.required' => 'Vui lòng nhập địa chỉ người nhận hàng',
            'dien_thoai.required' => 'Vui lòng nhập số điện thoại người nhận hàng',
            'email.required' => 'Vui lòng nhập email người nhận hàng"',
        ];
    }

    public function attribute() {

    }
}
