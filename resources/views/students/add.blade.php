<div class="main-wrapper">

    <x-header />
    <x-sidebar />

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                                <li class="breadcrumb-item active">Add Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form action="/students" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>First Name <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="first_name" placeholder="Enter First Name">
                                            @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Last Name <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="last_name" placeholder="Enter Last Name">
                                            @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Gender <span class="login-danger">*</span></label>
                                            <select class="form-control select" name="gender">
                                                <option name="">Select Gender</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            @if ($errors->has('gender'))
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Date Of Birth <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" name="date_of_birth" placeholder="DD-MM-YYYY">
                                            @if ($errors->has('date_of_birth'))
                                            <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Roll </label>
                                            <input class="form-control" type="text" name="roll_number" placeholder="Enter Roll Number">
                                            @if ($errors->has('roll_number'))
                                            <span class="text-danger">{{ $errors->first('roll_number') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Blood Group <span class="login-danger">*</span></label>
                                            <select class="form-control select" name="blood_group">
                                                <option name="">Please Select Group </option>
                                                <option value="B+">B+</option>
                                                <option value="A+">A+</option>
                                                <option value="O+">O+</option>
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
                                                <option name="">Please Select Religion </option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            @if ($errors->has('religion'))
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>E-Mail <span class="login-danger">*</span></label>
                                            <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Class <span class="login-danger">*</span></label>
                                            <select class="form-control select" name="class">
                                                <option name="">Please Select Class </option>
                                                <option value="NURSERY">NURSERY</option>
                                                <option value="LKG">LKG</option>
                                                <option value="UKG">UKG</option>
                                                <option value="CLASS 1">CLASS 1</option>
                                                <option value="CLASS 2">CLASS 2</option>
                                                <option value="CLASS 3">CLASS 3</option>
                                                <option value="CLASS 4">CLASS 4</option>
                                                <option value="CLASS 5">CLASS 5</option>
                                                <option value="CLASS 6">CLASS 6</option>
                                                <option value="CLASS 7">CLASS 7</option>
                                                <option value="CLASS 8">CLASS 8</option>
                                                <option value="CLASS 9">CLASS 9</option>
                                                <option value="CLASS 10">CLASS 10</option>
                                                <option value="CLASS 11">CLASS 11</option>
                                                <option value="CLASS 12">CLASS 12</option>
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
                                                <option name="">Please Select Section </option>
                                                <option value="B">B</option>
                                                <option value="A">A</option>
                                                <option value="C">C</option>
                                            </select>
                                            @if ($errors->has('section'))
                                            <span class="text-danger">{{ $errors->first('section') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Admission ID </label>
                                            <input class="form-control" type="text" name="admission_id" placeholder="Enter Admission ID">
                                            @if ($errors->has('admission_id'))
                                            <span class="text-danger">{{ $errors->first('admission_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Phone </label>
                                            <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number">
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
                                            <input type="text" class="form-control" name="username" placeholder="Enter Username">
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