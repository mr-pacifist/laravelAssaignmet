@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row d-flex ">
        <div class="col-md-4 ">
            <div class="">
                <h2 class="">Insert Certificate </h2>
                <form action="{{route('cirtificate.store')}}" method="POST" class="">
                            @csrf
                    <div class="form-group">
                        <label for="degreeName">Certificate Name:</label>
                        <input type="text" class="form-control my-1" name="degreeName" placeholder="Certificate Name"
                                    required>
                    </div>
                    <div class="form-group">
                        <label for="institute">Institute:</label>
                        <input type="text" class="form-control my-1" name="institute" placeholder="Institute Name"
                                    required>
                    </div>
                    <div class="form-group">
                        <label for="passingYear">Passing Year:</label>
                        <input type="number" class="form-control my-1" name="passingYear" placeholder="Passing Year"
                                    required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student ID:</label>
                        <input type="text" class="form-control my-1" name="studentID"
                                    placeholder="Student ID" required>
                    </div>
                    <div class="form-group">
                        <label for="GPA">GPA:</label>
                        <input type="text" class="form-control my-1" name="GPA"
                                    placeholder="Enter gpa" required>
                    </div>
                    <button type="submit" class="btn btn-warning form-control text-white my-2">Submit</button>
                </form>
            </div>         
        </div>
        <div class="col-md-8">
            <h2 class="">Certificate List</h2>
            <table class="table text-light">
                <thead>
                    <th>Certificate Name</th>
                    <th>Institute</th>
                    <th>Passing Year</th>
                    <th>Student ID</th>
                    <th>GPA</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach($cirtificate as $cirtificate)
                     <tr class="tableRow ">
                        <td>{{$cirtificate->degreeName}}</td>
                        <td>{{$cirtificate->institute}}</td>
                        <td>{{$cirtificate->passingYear}}</td>
                        <td>{{$cirtificate->studentID}}</td>
                        <td>{{$cirtificate->GPA}}</td>
                            <td>
                            <a href="{{route('cirtificate.edit',$cirtificate->id)}}"
                                            class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('cirtificate.delete',$cirtificate->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delte</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection
@section('footerScript')
@if(Session::has('success'))
<script type="text/javascript">
$(function() {
    toastr.success("{{ Session::get('success') }}");
})
</script>
@endif
@if(Session::has('fail'))
<script type="text/javascript">
$(function() {
    toastr.error("{{ Session::get('fail') }}");
})
</script>
@endif
@stop