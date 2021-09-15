@extends('backend.template.template')

@section('content')
<div class ="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create Task List</h4>
        <p class = "mg-b-0"> Create tasks from here</p>
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
                <form action="{{route('task.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Task Name</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            required="required"
                            autocomplete="off"></div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Task Status</label>
                            <select class="form-control" name="status">
                                <option value="2">Please select the status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
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
