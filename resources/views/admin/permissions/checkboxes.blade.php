@foreach ($permissions as $id => $name)
    <div class="custom-control custom-checkbox">
        <input
            type="checkbox"
            name='permissions[]'
            class="custom-control-input"
            id="checkPermission{{$id}}"
            value="{{$name}}"
            {{ 
                $user->permissions->contains($id) || collect(old('permissions'))->contains($name) ? 'checked':''
            }}
        >
        <label class="custom-control-label" for="checkPermission{{$id}}">{{$name}}</label>
    </div>
    
        {{-- <small class="text-muted">{{ $role->permissions->pluck('name')->implode(', ')}}</small> --}}
@endforeach 
