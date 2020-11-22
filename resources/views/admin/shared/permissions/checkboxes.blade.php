

        @foreach ($permissions as $id => $name)
            <div class="col-md-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="permiso{{$id}}" 
                        value="{{$name}}"
                        {{ $model->permissions->contains($id) || collect(old('permissions'))->contains($name) ? 'checked':''}}
                        name="permissions[]"
                    >
                    <label class="custom-control-label" for="permiso{{$id}}">{{$name}}</label>
                </div>
            </div>
        @endforeach
     