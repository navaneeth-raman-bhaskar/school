@extends('layouts.layout')
@section('content')
    <h3>Edit Marks Details</h3>
    <div class="container">
        <form action="{{route('marklist.update',$student)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col form-group">
                    <label for="">Student :</label>
                    <strong>{{$student->name}}</strong>
                </div>
            </div>
            @foreach($student->markLists??[] as $examination)
           <div class="row">
               <div class="col-1">
                  <strong> {{$loop->iteration}}</strong>
               </div>
               <div class="col-11">
                   <div class="row">
                       <div class="col form-group">
                           <label class="label" for="">Subject</label>
                           <select class="form-control" name="exam[{{$examination->id}}][subject_id]">
                               <option value="">--SELECT--</option>
                                 @foreach($subjects as $id=>$subject)
                                     <option value="{{$id}}" @selected( (old("exam")[$examination->id]['subject_id'] ?? $examination->subject_id) == $id)>{{$subject}}</option>
                                 @endforeach
                           </select>
                           @error("exam.$examination->id.subject_id")<p class="text-danger">{{$errors->first("exam.$examination->id.subject_id")}}</p>@enderror
                       </div>
                   </div>
                   <div class="row">
                       <div class="col form-group">
                           <label class="label" for="">Term</label>
                           <select class="form-control" name="exam[{{$examination->id}}][term_id]">
                               <option value="">--SELECT--</option>
                               @foreach($terms as $id=>$term)
                                    <option value="{{$id}}"  @selected( (old("exam")[$examination->id]['term_id'] ?? $examination->term_id) == $id)>{{$term}}</option>
                                @endforeach
                           </select>
                            @error("exam.$examination->id.term_id")<p class="text-danger">{{$errors->first("exam.$examination->id.term_id")}}</p>@enderror
                       </div>
                   </div>

                   <div class="row">
                       <div class="col form-group">
                           <label class="label" for="">Mark</label>
                           <input class="form-control" type="text" name="exam[{{$examination->id}}][mark]" value="{{ old("exam")[$examination->id]['mark'] ?? $examination->mark}}"
                                  inputmode="numeric">
                           @error("exam.$examination->id.mark")<p class="text-danger">{{$errors->first("exam.$examination->id.mark")}}</p>@enderror
                       </div>
                   </div>
                     <div class="row">
                         <div class="col form-group">
                             <label class="label" for="">Min Mark</label>
                             <input class="form-control" type="text" name="exam[{{$examination->id}}][min_mark]" value="{{ old("exam")[$examination->id]['min_mark'] ?? $examination->min_mark}}"
                                    inputmode="numeric">
                             @error("exam.$examination->id.min_mark")<p class="text-danger">{{$errors->first("exam.$examination->id.min_mark")}}</p>@enderror
                         </div>
                     </div>
                     <div class="row">
                         <div class="col form-group">
                             <label class="label" for="">Max Mark</label>
                             <input class="form-control" type="text" name="exam[{{$examination->id}}][max_mark]" value="{{ old("exam")[$examination->id]['max_mark'] ?? $examination->max_mark}}"
                                    inputmode="numeric">
                             @error("exam.$examination->id.max_mark")<p class="text-danger">{{$errors->first("exam.$examination->id.max_mark")}}</p>@enderror
                         </div>
                     </div>
               </div>
           </div>
            @endforeach
            <button class="btn btn-primary">Update</button>
            <a class="btn btn-secondary" href="{{route('marklist.index')}}">Back</a>
        </form>
    </div>

@endsection
