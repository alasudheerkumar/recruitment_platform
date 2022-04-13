 @extends('layouts.app')

@section('content')
<div class="container custom-color rounded">
    <h3>Task</h3><hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="width: 100%; height: 20rem; ">
                <div class="card-body">
                    <h5 class="card-title"><b>Task Phase 1 - Document</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Task for Web Developer Role</h6>
                    <p class="card-text">Please find the task document from the given below link. <br/> Deadline date is : "Some date here"</p>
                    <a href="#" style="text-size:15px;"class="card-link">Task</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 custom-color">
            <div class="card mb-3 custom-color" style="width: 100%; height: 20rem; ">
                <div class="card-body">
                    <h5 class="card-title"><b>Task Phase 2- Submission</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Submission</h6>
                    <p class="card-text">Please upload your solution here as pdf format</p>
                    <button class ="btn btn-danger" href= "#" stype="submit" name="task_submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('completed task')
    <!-- When submitted the task -->
    <div class="container custom-color rounded">
        <div class="row justify-content-md-center" height="150" width="200">
            <div class="col-md-4 ">
                <img src="img/x-mark.png"/>
            </div>
            <div class="col-md-8">
                <p class="card-text"> <b>You have already submitted and cannot submit now <br/>Or <br/>Deadline to submit the task is over.</b></p>
            </div>
        </div>
    </div>

@endsection
 






