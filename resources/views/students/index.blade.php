
<div class="main-wrapper">

<x-header />
<x-sidebar />
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">All Students</li>
</ul>
</div>
</div>
</div>
</div>

<div class="student-group-form">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by ID ...">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Name ...">
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search by Phone ...">
</div>
</div>
<div class="col-lg-2">
<div class="search-student-btn">
<button type="btn" class="btn btn-primary">Search</button>
</div>
</div>
</div>
</div>

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session()->get('message') }}.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Students</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="{{route('students.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</th>
<th>ROLL NO</th>
<th>Username</th>
<th>Name</th>
<th>Class</th>
<th>DOB</th>
<th>Mobile Number</th>

<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
    @foreach ($students as $key => $student)
    <tr>
<td>
<div class="form-check check-tables">
<input class="form-check-input" type="checkbox" value="something">
</div>
</td>
<td>{{$student->roll_number}}</td>
<td>{{$student->username}}</td>
<td>
<h2 class="table-avatar">
<a href="" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('uploads/student/'.$student->photo_path)}}" alt="User Image"></a>
<a href="#">{{$student->first_name}}</a>
</h2>
</td>
<td>{{$student->class}} {{$student->section}}</td>
<td>{{ \Carbon\Carbon::parse($student->date_of_birth)->format('j M Y') }}</td>

<td>{{$student->phone}}</td>

<td class="text-end">
<div class="actions ">

<a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm bg-success-light me-2">
            <i class="feather-edit"></i>
        </a>
<form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm bg-danger-light" onclick="return confirm('Are you sure you want to delete this student?');">
                <i class="feather-trash-2"></i>
            </button>
        </form>
</div>
</td>
</tr>
    @endforeach


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
<x-footer />