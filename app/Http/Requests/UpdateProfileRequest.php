<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
      'name' => 'required|string|max:191',
      'email' => 'required|email|unique:users,email,' . auth()->user()->id,
      'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ];
  }
}
