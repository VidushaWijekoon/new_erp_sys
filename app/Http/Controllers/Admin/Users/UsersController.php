<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        return view('pages.users.index');
    }

    public function activate($user)
    {
        $user = User::findOrFail($user);

        $user->status = '1';
        $user->update();
        return redirect()->back()->with('message', 'User Activated');
    }

    public function dectivate($user)
    {
        $user = User::findOrFail($user);

        $user->status = '0';
        $user->update();
        return redirect()->back()->with('message', 'Successfully Deactivate User');
    }

    public function destroy($user)
    {
        $user = User::findOrFail($user);
        if (!Auth::user()->role == 1) {
            $user->delete();
            return redirect()->back()->with('message', 'User Been Deleted');
        } else {
            return redirect()->back()->with('message', 'You Cannot Delete the Admin');
        }
    }
}
