@extends('student.layout')

@section('content')
  <h2>Crud Table</h2>
  <p>Student Details</p>
  @if(Session::has('student_created'))
    <div class="alert alert-success" role="alert">
         {{Session::get('student_created')}}
    </div>
   @elseif(Session::has('student_updated'))
   <div class="alert alert-success" role="alert">
         {{Session::get('student_updated')}}
    </div> 
    @elseif(Session::has('student_deleted'))
   <div class="alert alert-success" role="alert">
         {{Session::get('student_deleted')}}
    </div> 
  @endif  
  <a href="{{route('create')}}"><button class="btn btn-info">Add</button></a>      
  <table class="table">
    <thead>
      <tr>
        <th><Noscript></Noscript></th>
        <th>Student Name</th>
        <th>Course</th>
        <th>Fees</th>
        <th>Date</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach($data as $index=>$student)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$student->studentname}}</td>
        <td>{{$student->course}}</td>
        <td>{{$student->fee}}</td>
        <td>{{$student->created_at}}</td>
        <td><img src="{{url('/images')}}/{{$student->image}}" width="100px" alt="img"></td>
        <td><a href="/edit/{{$student->id}}"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="/delete/{{$student->id}}"><button class="btn btn-danger">Delete</button></a></td>
      </tr>    
     @endforeach 
    
    </tbody>
    
  </table>
<span>
    {{$data->links()}}
   
</span>
@endsection

