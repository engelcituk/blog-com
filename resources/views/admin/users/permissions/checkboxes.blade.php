@foreach ($permissions as $id => $name)
    <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$name}}"
            {{ $model->permissions->contains($id) || 
               collect(old('permissions'))->contains($name) ?
                'checked':''
                }}> {{$name}}
        <span class="form-check-sign">
            <span class="check"></span>
        </span>
        </label>
    </div>
@endforeach