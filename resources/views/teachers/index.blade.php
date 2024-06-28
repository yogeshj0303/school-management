
<div class="main-wrapper">
<x-header />
<x-sidebar />

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Teachers</li>
</ul>
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
<div class="card card-table">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="teachers.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="teachers-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="{{route('teachers.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
<th>ID</th>
<th>Name</th>
<th>Class</th>
<th>Gender</th>
<th>Subject</th>
<th>Section</th>
<th>Mobile Number</th>
<th>Address</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
@foreach ($teachers as $key => $teacher)
        <tr>
            <td>
                <div class="form-check check-tables">
                    <input class="form-check-input" type="checkbox" value="{{ $teacher->id }}">
                </div>
            </td>
            <td>{{ $teacher->teacher_id }}</td>
            <td>
                <h2 class="table-avatar">
                    <a href="" class="avatar avatar-sm me-2">
                        <img class="avatar-img rounded-circle" src="{{asset('uploads/student/'.$teacher->image)}}" alt="User Image">
                    </a>
                    <a href="teacher-details.html">{{ $teacher->name }}</a>
                </h2>
            </td>
            <td>{{ $teacher->class }}</td>
            <td>{{ $teacher->gender }}</td>
            <td>{{ $teacher->subject }}</td>
            <td>{{ $teacher->section }}</td>
            <td>{{ $teacher->mobile }}</td>
            <td>{{ $teacher->address }}</td>
            <td class="text-end">
                <div class="actions">
                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm bg-success-light me-2">
            <i class="feather-edit"></i>
        </a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm bg-success-light me-2" onclick="return confirm('Are you sure you want to delete this teacher?');">
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


<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<x-footer />