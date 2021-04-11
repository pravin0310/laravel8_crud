@extends('student.layout')

@section('content')
  <h2>Crud Table</h2>
  <a href="{{route('student')}}"><button class="btn btn-info">Back</button></a>      
  @if(Session::has('student_created'))
    <div class="alert alert-success" role="alert">
         {{Session::get('student_created')}}
    </div>
  @endif 
  <form action="{{route('student.edit')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="studentname">Student Name:</label>
      <input type="studentname" class="form-control" value="{{$data[0]['studentname']}}" id="studentname" placeholder="Enter studentname" name="studentname">
    </div>
    <div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" value="{{$data[0]['course']}}" id="course" placeholder="Enter course" name="course">
    </div>
    <div class="form-group">
      <label for="fees">Fees:</label>
      <input type="text" class="form-control" value="{{$data[0]['fee']}}" id="fees" placeholder="Enter Fees" name="fees">
    </div>
    <div class="form-group">
      <label for="fees">Image:</label>
      <input type="file" class="form-control" id="fees" placeholder="Enter Fees" name="image">
    </div>
    <img src="{{url('/images')}}/{{$data[0]['image']}}" name="img" width="100px" alt="img">
    <input type="hidden" class="form-control" id="fees" placeholder="Enter Fees" value="{{$data[0]['image']}}" name="old_image">
    <input type="hidden" class="form-control" value="{{$data[0]['id']}}" id="id" placeholder="Enter Fees" name="id">
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
 
@endsection

