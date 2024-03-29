<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'category-names'  => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'description' => 'Description is required',
            'image' => 'Image file type is not jpeg,png,jpg '
        ];
    }
}
