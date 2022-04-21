<div class="container">
    <form action="{{$action}}" method="POST">
        @csrf
        @method($method)
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') ?? $student->name}}">
                @error('name')<p class="text-danger">{{$errors->first('name')}}</p>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Age</label>
                <input class="form-control" type="text" name="age" value="{{ old('age') ?? $student->age}}"
                       inputmode="numeric">
                @error('age')<p class="text-danger">{{$errors->first('age')}}</p>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
              <x-gender-radio :model="$student"/>
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Teacher In-Charge</label>
               <select class="form-control" name="teacher_id">
                    <option value="">--SELECT--</option>
                    @foreach($teachers as $id=>$teacher)
                        <option value="{{$id}}" @selected( old('teacher_id', $student->teacher_id) == $id) >{{$teacher}}</option>
                    @endforeach
                </select>
                @error('teacher_id')<p class="text-danger">{{$errors->first('teacher_id')}}</p>@enderror
            </div>
        </div>
        <button class="btn btn-primary">{{$text}}</button>
        <a class="btn btn-secondary" href="{{route('students.index')}}">Back</a>
    </form>
</div>
