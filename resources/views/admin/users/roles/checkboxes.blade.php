@foreach ($roles as $id => $name)
    <div class="custom-control custom-checkbox">
        <input
            type="checkbox"
            name='roles[]'
            class="custom-control-input"
            id="checkbox{{$id}}"
            {{$user->roles->contains($id) ? 'checked' : ''}}
            value="{{$name}}"
        >
        <label class="custom-control-label" for="checkbox{{$id}}">{{$name}}</label>
    </div>
    
        {{-- <small class="text-muted">{{ $role->permissions->pluck('name')->implode(', ')}}</small> --}}
@endforeach 
