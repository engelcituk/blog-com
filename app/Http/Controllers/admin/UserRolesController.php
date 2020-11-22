<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserRolesController extends Controller
{
    
    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->roles);

        return back()->withflash('Los roles han sido actualizados');
    }

}
