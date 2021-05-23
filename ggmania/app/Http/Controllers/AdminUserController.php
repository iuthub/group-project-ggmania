<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminUserController extends Controller{

    public function create($id) {
        $user = User::findOrFail($id);

        if (Auth::user()->status === 'admin') {
            $user->status = 'admin';
            $user->save();
        }

        return $user;
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        if (Auth::user()->status === 'admin'){
            $user->status = 'user';
            $user->save();
        }

        return $user;
    }

}
