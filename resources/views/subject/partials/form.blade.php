<div class="container">
    <form action="{{$action}}" method="POST">
        @csrf
        @method($method)
        <div class="row">
            <div class="col form-group">
                <label class="label" for="">Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') ?? $subject->name}}">
                @error('name')<p class="text-danger">{{$errors->first('name')}}</p>@enderror
            </div>
        </div>
        <button class="btn btn-primary">{{$text}}</button>
        <a class="btn btn-secondary" href="{{route('subjects.index')}}">Back</a>
    </form>
</div>
