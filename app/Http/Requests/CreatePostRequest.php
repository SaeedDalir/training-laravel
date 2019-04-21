<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title'=>['required','max:50'],
//            pak kardim new Uppercase()
            'describtion'=>'required',
            'file'=>['required','max:2000','mimes:png,jpg,jpeg']
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'لطفا فیلد عنوان را پر کنید .',
            'title.max'=>'حداکثر کاراکتر مجاز برای فیلد عنوان 50 می باشد .',
            'describtion.required'=>'لطفا فیلد توضیحات را پر کنید .',
            'file.required'=>'لطفا تصویر اصلی را انتخاب کنید',
            'file.max'=>'حجم تصویر ارسالی می تواند حداکثر 2000 کیلوبایت باشد',
            'file.mimes'=>'فرمت تصویر ارسالی می تواند jpeg و jpg و png باشد'
        ];

    }
}
