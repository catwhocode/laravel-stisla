<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
  public function index()
  {
    return view('setting.profile.password', [
      'title' => 'Profile',
      'subtitle' => 'Update Password'
    ]);
  }

  public function store(UpdatePasswordRequest $request)
  {
    $user = User::find(auth()->user()->id);
    if (Hash::check($request->input('current_password'), $user->password)) {
      $user->password = Hash::make($request->input('password'));
      $user->save();
    } else {
      return to_route('setting.password.index')->with('error', 'Current password is not correct.');
    }

    return to_route('setting.password.index')->with('success', 'Password updated successfully');
  }
}
