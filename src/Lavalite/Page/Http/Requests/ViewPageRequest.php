<?php

namespace Lavalite\Page\Http\Requests;

use App\Http\Requests\Request;
use User;

class ViewPageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return User::can(['page.view']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
