@foreach ($roles as $role)
    <div class="custom-control custom-checkbox">
        <input
            type="checkbox"
            name='roles[]'
            class="custom-control-input"
            id="checkbox{{$role->id}}"
            {{$user->roles->contains($role->id) ? 'checked' : ''}}
            value="{{$role->name}}"
        >
        <label class="custom-control-label" for="checkbox{{$role->id}}">{{$role->name}}</label>
    </div>
    
    <small class="text-muted">{{ $role->permissions->pluck('name')->implode(', ')}}</small> 
@endforeach 
