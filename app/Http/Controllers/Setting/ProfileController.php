<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    return view('setting.profile.detail', [
      'title' => 'Profile',
      'subtitle' => 'Update Profile'
    ]);
  }

  public function store(UpdateProfileRequest $request)
  {
    $user = User::find(auth()->user()->id);
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->hasFile('profile_picture')) {
      $user->profile_picture = $request->file('profile_picture')->store('profile_pictures');
    }

    $user->save();

    return to_route('setting.profile.index')->with('success', 'Profile updated successfully');

  }
}
