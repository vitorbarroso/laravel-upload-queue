<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        $maxsize = config('parser.maxsize');
        $mimes = join(',', config('parser.mimes'));
        $mimetypes = join(',', config('parser.mimetypes'));

        return [
            'file' => 'required'
                //.'|mimes:'.$mimes
                //.'|mimetypes:'.$mimetypes
                .'|max:'.$maxsize,
        ];
    }
}
