<label class="label" for="">Gender</label>
@foreach($genders as $key=>$gender)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="{{$name}}" id="gender-{{$loop->index}}"
               value="{{$key}}" @checked($key==$checked)>
        <label class="form-check-label" for="gender-{{$loop->index}}">{{$gender}}</label>
    </div>
@endforeach

@error($name)<p class="text-danger">{{$errors->first($name)}}</p>@enderror
