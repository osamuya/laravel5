<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
//class StoreRequest extends Request
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
//		exit('foobar');
		return [
			'Email' => 'required|unique:lavel_users|email',
			'Password' => 'required|min:4',
		];

    }
	
# responseを上書きする
# ajax,jsonで返答時以外は親に流す

    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson()) {
            # ここでいじれる
            return new JsonResponse(['message' => 'じゆうじざい！','errors'=>$errors], 422);
        }

        parent::response($errors);
    }

}
}
