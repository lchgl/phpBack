<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Validator;
use Hash;

class AdminPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function addValidator(){
        //        添加验证规则
        Validator::extend('check_password',function($attribute,$value,$parameters,$validator){
            return Hash::check($value,Auth::guard('admin')->user()->password);
        });
    }
    public function rules()
    {
        $this->addValidator();
        return [
            'original_password' => 'sometimes|required|check_password',
            'password' =>'sometimes|required|confirmed',
            'password_confirmation' => 'sometimes|required',
        ];
    }
    public function messages(){
//        dd($this);
        return [
            'password.required' => '新密码不能为空',
            'original_password.required' => '原密码不能为空',
            'password_confirmation.required' => '确认密码不能为空',
            'password.confirmed' => '两次密码输入不一致',
            'original_password.check_password' => '输入原密码错误',
        ];
    }
}
