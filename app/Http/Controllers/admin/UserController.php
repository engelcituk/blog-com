<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Events\UserWasCreated;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::allowed()->get();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;

        $this->authorize('create', $user);//policy, se requiere autorización para crear el usuario 
        
        $roles = Role::with('permissions')->get(); 
        $permissions = Permission::pluck('name', 'id'); 

        return view('admin.users.create',compact('user', 'roles','permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', new User);//policy, se requiere autorización para guardar al usuario

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);

        $data['password'] = str_random(8);

        $user = User::create($data);

        $user->assignRole($request->roles);
        $user->givePermissionTo($request->permissions);

        //event(new UserWasCreated($user, $data['password']));

        UserWasCreated::dispatch($user, $data['password']); //envio de email con eventos y listeners

        return redirect()->route('admin.users.edit', $user)->withFlash('el usuario ha sido creado');
        
    }

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);//policy, se requiere autorización para ver el usuario a actualizar

        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);//policy, se requiere autorización para ver el usuario a actualizar

        $roles = Role::with('permissions')->get(); 
        $permissions = Permission::pluck('name', 'id'); 

        return view('admin.users.edit',compact('user', 'roles','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update', $user);//policy, se requiere autorización para actualizar el usuario

        $user->update($request->validated()); //logica de validación realizado en el formRequest

        return back()->withFlash('Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idUsuario) //solo el admin hace esto
    {
        
        $authUser = Auth::user(); // get current logged in user
        $user = User::find($idUsuario); //busco al usuario a borrar

        if($authUser->can('delete',$user)){
            $user->delete();
            $ok= true;
            $mensaje='Usuario eliminado';
        }else{
            $ok= false;
            $mensaje='No se puede eliminar al usuario';
        }
        
         return response()->json(
            [
            'ok' => $ok,
            'mensaje' => $mensaje
            ]
        );
    }
}
