@extends('backend.template.template')

@section('content')
<div class ="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update task</h4>
        <p class = "mg-b-0"> Update the task information</p>
    </div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h6 class="br-section-label">Create Tasks</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('task.update',$task->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Task Name</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            required="required"
                            autocomplete="off"
                            value="{{$task->name}}"
                            ></div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5">{{$task->description}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Task Status</label>
                            <select class="form-control" name="status">
                                <option value="2">Please select the status</option>
                                <option value="1"@if ($task->status ==1)
                                    selected
                                @endif>Active</option>
                                <option value="2"@if ($task->status ==2)
                                    selected
                                @endif>Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="save" class="btn btn-info btn-block mg-b-10" value="Add New Task">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
