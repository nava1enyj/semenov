<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRobotRequest extends FormRequest
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
            'image' => 'required|image',
            'description' => 'required|min:150'
        ];
    }

    public function messages()
    {
       return [
           'name.required' => 'Поля имени робота не заполнено',
           'image.required' => 'Добавьте роботу картинку',
           'image.image' => 'Вы загружаете не картинку',
           'description.required' => 'Не забудьте добавить описание',
           'description.min' => 'Минимальный размер символов в описании - 150',

       ];
    }
}
