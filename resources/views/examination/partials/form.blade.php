<div class="container">
    <form action="{{$action}}" method="POST">
        @csrf
        @method($method)
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Student</label>
               <select class="form-control" name="student_id">
                    <option value="">--SELECT--</option>
                    @foreach($students as $id=>$student)
                        <option value="{{$id}}" @selected( old('student_id', $examination->student_id) == $id) >{{$student}}</option>
                    @endforeach
                </select>
                @error('student_id')<p class="text-danger">{{$errors->first('student_id')}}</p>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Subject</label>
                <select class="form-control" name="subject_id">
                    <option value="">--SELECT--</option>
                    @foreach($subjects as $id=>$subject)
                        <option value="{{$id}}" @selected( old('subject_id', $examination->subject_id) == $id)>{{$subject}}</option>
                    @endforeach
                </select>
                @error('subject_id')<p class="text-danger">{{$errors->first('subject_id')}}</p>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Term</label>
                <select class="form-control" name="term_id">
                    <option value="">--SELECT--</option>
                    @foreach($terms as $id=>$term)
                        <option value="{{$id}}" @selected( old('term_id', $examination->term_id) == $id)>{{$term}}</option>
                    @endforeach
                </select>
                @error('term_id')<p class="text-danger">{{$errors->first('term_id')}}</p>@enderror
            </div>
        </div>


        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Mark</label>
                <input class="form-control" type="text" name="mark" value="{{ old('mark', $examination->mark)}}"
                       inputmode="numeric">
                @error('mark')<p class="text-danger">{{$errors->first('mark')}}</p>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Min Mark</label>
                <input class="form-control" type="text" name="min_mark" value="{{ old('min_mark', $examination->min_mark)}}"
                       inputmode="numeric">
                @error('min_mark')<p class="text-danger">{{$errors->first('min_mark')}}</p>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Max Mark</label>
                <input class="form-control" type="text" name="max_mark" value="{{ old('max_mark', $examination->max_mark)}}"
                       inputmode="numeric">
                @error('max_mark')<p class="text-danger">{{$errors->first('max_mark')}}</p>@enderror
            </div>
        </div>

        <button class="btn btn-primary">{{$text}}</button>
        <a class="btn btn-secondary" href="{{route('examinations.index')}}">Back</a>
    </form>
</div>
