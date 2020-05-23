<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSach extends FormRequest
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
            'ten_sach' => 'required',
            'ngay_xuat_ban' => 'required',
            'hinh' => 'required',
            'don_gia' => 'required',
        ];
    }

    public function messages(){
        return [
            'ten_sach.required' => 'Vui lòng nhập tên sách',
            'hinh.required' => 'Vui lòng chọn hình sách',
            'don_gia.required' => 'Vui lòng nhập giá sách',
        ];
    }
}
