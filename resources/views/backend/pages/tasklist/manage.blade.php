@extends('backend.template.template')

@section('content')
<div class ="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Task List</h4>
        <p class = "mg-b-0"> Manage from here</p>
    </div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h6 class="br-section-label">Card Block</h6>
            </div>
        </div>
        <div class="row">
            {{-- manage table start --}}
            <div class="col-md-12">
                <div class="bd bd-gray-300 rounded table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#Sl</th>
                                <th scope="col">Task Name</th>
                                <th scope="col">Task Details</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp @foreach ($tasks as $task)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$task->name}}</td>
                                <td>{{$task->description}}</td>
                                <td>
                                    @if ($task->status == 1)
                                    <span class="badge badge-success">Pednding</span>

                                    @elseif ($task->status ==2)
                                    <span class="badge badge-danger">Done</span>
                                    @endif
                                </td>
                                <td>

                                    <div class="action-panel">
                                        <ul>
                                            <li>
                                                <a href="{{route('task.edit',$task->id)}}">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a ">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#delete{{$task->id}}">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="delete{{$task->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm To delete this task ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-buttons">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('task.destroy',$task->id)}}" method="POST">
                                                                    @csrf
                                                                     <button type="submit" class="btn btn-success">Confirm</button>
                                                                     <button data-dismiss="modal" class="btn btn-danger">Cancel</button>
                                                                </form>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp @endforeach

                        </tbody>
                    </table>
                </div>

                {{-- Manage Table End --}}
            </div>
        </div>
    </div>
</div>
@endsection
