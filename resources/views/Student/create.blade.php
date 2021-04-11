@extends('student.layout')

@section('content')
  <h2>Crud Table</h2>
  <a href="{{route('student')}}"><button class="btn btn-info">Back</button></a>      
  @if(Session::has('student_created'))
    <div class="alert alert-success" role="alert">
         {{Session::get('student_created')}}
    </div>
  @endif  
  <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="studentname">Student Name:</label>
      <input type="studentname" class="form-control" id="studentname" placeholder="Enter studentname" name="studentname">
    </div>
    <div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
    </div>
    <div class="form-group">
      <label for="fees">Fees:</label>
      <input type="text" class="form-control" id="fees" placeholder="Enter Fees" name="fees">
    </div>
    <div class="form-group">
      <label for="fees">Document:</label>
      <input type="file" class="form-control" id="docuement" placeholder="Enter Fees" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

