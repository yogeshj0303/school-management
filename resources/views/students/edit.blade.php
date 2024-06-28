<div class="main-wrapper">

    <x-header />
    <x-sidebar />

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                                <li class="breadcrumb-item active">Edit Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>First Name <span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="first_name" value="{{ old('first_name', $student->first_name) }}" placeholder="Enter First Name">
                @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Last Name <span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="last_name" value="{{ old('last_name', $student->last_name) }}" placeholder="Enter Last Name">
                @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Gender <span class="login-danger">*</span></label>
                <select class="form-control select" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Others" {{ old('gender', $student->gender) == 'Others' ? 'selected' : '' }}>Others</option>
                </select>
                @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms calendar-icon">
                <label>Date Of Birth <span class="login-danger">*</span></label>
                <input class="form-control datetimepicker" type="text" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}" placeholder="DD-MM-YYYY">
                @if ($errors->has('date_of_birth'))
                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Roll </label>
                <input class="form-control" type="text" name="roll_number" value="{{ old('roll_number', $student->roll_number) }}" placeholder="Enter Roll Number">
                @if ($errors->has('roll_number'))
                <span class="text-danger">{{ $errors->first('roll_number') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Blood Group <span class="login-danger">*</span></label>
                <select class="form-control select" name="blood_group">
                    <option value="">Please Select Group </option>
                    <option value="B+" {{ old('blood_group', $student->blood_group) == 'B+' ? 'selected' : '' }}>B+</option>
                    <option value="A+" {{ old('blood_group', $student->blood_group) == 'A+' ? 'selected' : '' }}>A+</option>
                    <option value="O+" {{ old('blood_group', $student->blood_group) == 'O+' ? 'selected' : '' }}>O+</option>
                </select>
                @if ($errors->has('blood_group'))
                <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Religion <span class="login-danger">*</span></label>
                <select class="form-control select" name="religion">
                    <option value="">Please Select Religion </option>
                    <option value="Hindu" {{ old('religion', $student->religion) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Christian" {{ old('religion', $student->religion) == 'Christian' ? 'selected' : '' }}>Christian</option>
                    <option value="Others" {{ old('religion', $student->religion) == 'Others' ? 'selected' : '' }}>Others</option>
                </select>
                @if ($errors->has('religion'))
                <span class="text-danger">{{ $errors->first('religion') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>E-Mail <span class="login-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $student->email) }}" placeholder="Enter Email Address">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Class <span class="login-danger">*</span></label>
                <select class="form-control select" name="class">
    <option value="">Please Select Class</option>
    <option value="NURSERY" {{ old('class', $student->class) == 'NURSERY' ? 'selected' : '' }}>NURSERY</option>
    <option value="LKG" {{ old('class', $student->class) == 'LKG' ? 'selected' : '' }}>LKG</option>
    <option value="UKG" {{ old('class', $student->class) == 'UKG' ? 'selected' : '' }}>UKG</option>
    <option value="CLASS 1" {{ old('class', $student->class) == 'CLASS 1' ? 'selected' : '' }}>CLASS 1</option>
    <option value="CLASS 2" {{ old('class', $student->class) == 'CLASS 2' ? 'selected' : '' }}>CLASS 2</option>
    <option value="CLASS 3" {{ old('class', $student->class) == 'CLASS 3' ? 'selected' : '' }}>CLASS 3</option>
    <option value="CLASS 4" {{ old('class', $student->class) == 'CLASS 4' ? 'selected' : '' }}>CLASS 4</option>
    <option value="CLASS 5" {{ old('class', $student->class) == 'CLASS 5' ? 'selected' : '' }}>CLASS 5</option>
    <option value="CLASS 6" {{ old('class', $student->class) == 'CLASS 6' ? 'selected' : '' }}>CLASS 6</option>
    <option value="CLASS 7" {{ old('class', $student->class) == 'CLASS 7' ? 'selected' : '' }}>CLASS 7</option>
    <option value="CLASS 8" {{ old('class', $student->class) == 'CLASS 8' ? 'selected' : '' }}>CLASS 8</option>
    <option value="CLASS 9" {{ old('class', $student->class) == 'CLASS 9' ? 'selected' : '' }}>CLASS 9</option>
    <option value="CLASS 10" {{ old('class', $student->class) == 'CLASS 10' ? 'selected' : '' }}>CLASS 10</option>
    <option value="CLASS 11" {{ old('class', $student->class) == 'CLASS 11' ? 'selected' : '' }}>CLASS 11</option>
    <option value="CLASS 12" {{ old('class', $student->class) == 'CLASS 12' ? 'selected' : '' }}>CLASS 12</option>
</select>

                @if ($errors->has('class'))
                <span class="text-danger">{{ $errors->first('class') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Section <span class="login-danger">*</span></label>
                <select class="form-control select" name="section">
                    <option value="">Please Select Section </option>
                    <option value="B" {{ old('section', $student->section) == 'B' ? 'selected' : '' }}>B</option>
                    <option value="A" {{ old('section', $student->section) == 'A' ? 'selected' : '' }}>A</option>
                    <option value="C" {{ old('section', $student->section) == 'C' ? 'selected' : '' }}>C</option>
                </select>
                @if ($errors->has('section'))
                <span class="text-danger">{{ $errors->first('section') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Admission ID </label>
                <input class="form-control" type="text" name="admission_id" value="{{ old('admission_id', $student->admission_id) }}" placeholder="Enter Admission ID">
                @if ($errors->has('admission_id'))
                <span class="text-danger">{{ $errors->first('admission_id') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Phone </label>
                <input class="form-control" type="text" name="phone" value="{{ old('phone', $student->phone) }}" placeholder="Enter Phone Number">
                @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12">
            <h5 class="form-title"><span>Login Details</span></h5>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Username <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="username" value="{{ old('username', $student->username) }}" placeholder="Enter Username">
                @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Password <span class="login-danger">*</span></label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Repeat Password <span class="login-danger">*</span></label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password">
                @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Image <span class="login-danger">*</span></label>
                <input type="file" class="form-control" name="photo">
                <img class="avatar-img rounded-circle" src="{{asset('uploads/student/'.$student->photo_path)}}" style="width: 60px;" alt="Teacher Image">
                                           
                @if ($errors->has('photo'))
                <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12">
            <div class="student-submit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<x-footer />