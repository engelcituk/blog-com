<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserPermissionsController extends Controller
{
    
    public function update(Request $request, User $user)
    {
        $user->syncPermissions($request->permissions);

        return back()->withflash('Los permisos del usuario han sido actualizados');
    }
}
