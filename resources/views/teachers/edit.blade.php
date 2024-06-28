<div class="main-wrapper">

    <x-header />
    <x-sidebar />

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Teachers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
                            <li class="breadcrumb-item active">Edit Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <h5 class="form-title"><span>Basic Details</span></h5>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Teacher ID <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="teacher_id" value="{{ old('teacher_id', $teacher->teacher_id) }}" placeholder="Teacher ID">
                @if ($errors->has('teacher_id'))
                <span class="text-danger">{{ $errors->first('teacher_id') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Name <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $teacher->name) }}" placeholder="Enter Name">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Gender <span class="login-danger">*</span></label>
                <select class="form-control select" name="gender">
                    <option value="Male" {{ old('gender', $teacher->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender', $teacher->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Others" {{ old('gender', $teacher->gender) == 'Others' ? 'selected' : '' }}>Others</option>
                </select>
                @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms calendar-icon">
                <label>Date Of Birth <span class="login-danger">*</span></label>
                <input class="form-control datetimepicker" type="text" name="date_of_birth" value="{{ old('date_of_birth', $teacher->date_of_birth) }}" placeholder="DD-MM-YYYY">
                @if ($errors->has('date_of_birth'))
                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Mobile <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="mobile" value="{{ old('mobile', $teacher->mobile) }}" placeholder="Enter Phone">
                @if ($errors->has('mobile'))
                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms calendar-icon">
                <label>Joining Date <span class="login-danger">*</span></label>
                <input class="form-control datetimepicker" type="text" name="joining_date" value="{{ old('joining_date', $teacher->joining_date) }}" placeholder="DD-MM-YYYY">
                @if ($errors->has('joining_date'))
                <span class="text-danger">{{ $errors->first('joining_date') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4 local-forms">
            <div class="form-group">
                <label>Qualification <span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="qualification" value="{{ old('qualification', $teacher->qualification) }}" placeholder="Enter Qualification">
                @if ($errors->has('qualification'))
                <span class="text-danger">{{ $errors->first('qualification') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Experience <span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="experience" value="{{ old('experience', $teacher->experience) }}" placeholder="Enter Experience">
                @if ($errors->has('experience'))
                <span class="text-danger">{{ $errors->first('experience') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Class <span class="login-danger">*</span></label>
                <select class="form-control select" name="class" id="class_select">
                    <option value="">Please Select Class</option>
                    <option value="NURSERY" {{ old('class', $teacher->class) == 'NURSERY' ? 'selected' : '' }}>NURSERY</option>
                    <option value="LKG" {{ old('class', $teacher->class) == 'LKG' ? 'selected' : '' }}>LKG</option>
                    <option value="UKG" {{ old('class', $teacher->class) == 'UKG' ? 'selected' : '' }}>UKG</option>
                    <option value="CLASS 1" {{ old('class', $teacher->class) == 'CLASS 1' ? 'selected' : '' }}>CLASS 1</option>
                    <option value="CLASS 2" {{ old('class', $teacher->class) == 'CLASS 2' ? 'selected' : '' }}>CLASS 2</option>
                    <option value="CLASS 3" {{ old('class', $teacher->class) == 'CLASS 3' ? 'selected' : '' }}>CLASS 3</option>
                    <option value="CLASS 4" {{ old('class', $teacher->class) == 'CLASS 4' ? 'selected' : '' }}>CLASS 4</option>
                    <option value="CLASS 5" {{ old('class', $teacher->class) == 'CLASS 5' ? 'selected' : '' }}>CLASS 5</option>
                    <option value="CLASS 6" {{ old('class', $teacher->class) == 'CLASS 6' ? 'selected' : '' }}>CLASS 6</option>
                    <option value="CLASS 7" {{ old('class', $teacher->class) == 'CLASS 7' ? 'selected' : '' }}>CLASS 7</option>
                    <option value="CLASS 8" {{ old('class', $teacher->class) == 'CLASS 8' ? 'selected' : '' }}>CLASS 8</option>
                    <option value="CLASS 9" {{ old('class', $teacher->class) == 'CLASS 9' ? 'selected' : '' }}>CLASS 9</option>
                    <option value="CLASS 10" {{ old('class', $teacher->class) == 'CLASS 10' ? 'selected' : '' }}>CLASS 10</option>
                    <option value="CLASS 11" {{ old('class', $teacher->class) == 'CLASS 11' ? 'selected' : '' }}>CLASS 11</option>
                    <option value="CLASS 12" {{ old('class', $teacher->class) == 'CLASS 12' ? 'selected' : '' }}>CLASS 12</option>
                </select>
                @if ($errors->has('class'))
                <span class="text-danger">{{ $errors->first('class') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Subject <span class="login-danger">*</span></label>
                <select class="form-control select" name="subject" id="subject_select">
                    <option value="">Please Select Subject</option>
                    <?php
                        $subjects = DB::table('subjects')->get();
                    ?>
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->subject_name }}" {{ old('subject', $teacher->subject) == $subject->subject_name ? 'selected' : '' }}>{{ $subject->subject_name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('subject'))
                <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12">
            <h5 class="form-title"><span>Login Details</span></h5>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Username <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="username" value="{{ old('username', $teacher->username) }}" placeholder="Enter Username">
                @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Email ID <span class="login-danger">*</span></label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $teacher->email) }}" placeholder="Enter Mail Id">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Repeat Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password">
            </div>
        </div>
        <div class="col-12">
            <h5 class="form-title"><span>Address</span></h5>
        </div>
        <div class="col-12">
            <div class="form-group local-forms">
                <label>Address <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="address" value="{{ old('address', $teacher->address) }}" placeholder="Enter address">
                @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>City <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="city" value="{{ old('city', $teacher->city) }}" placeholder="Enter City">
                @if ($errors->has('city'))
                <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>State <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="state" value="{{ old('state', $teacher->state) }}" placeholder="Enter State">
                @if ($errors->has('state'))
                <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Zip Code <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="zip_code" value="{{ old('zip_code', $teacher->zip_code) }}" placeholder="Enter Zip Code">
                @if ($errors->has('zip_code'))
                <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Country <span class="login-danger">*</span></label>
                <input type="text" class="form-control" name="country" value="{{ old('country', $teacher->country) }}" placeholder="Enter Country">
                @if ($errors->has('country'))
                <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
                <label>Upload Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <img class="avatar-img rounded-circle" src="{{asset('uploads/student/'.$teacher->image)}}" style="width: 60px;" alt="Teacher Image">
                 
                @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div>
        </div>
        <div class="col-12">
            <div class="form-group local-forms">
                <button type="submit" class="btn btn-primary">Update Teacher</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#class_select').change(function() {
            var classValue = $(this).val();
            var subjectSelect = $('#subject_select');

            // Clear previous options
            subjectSelect.empty();

            // Add default option
            subjectSelect.append('<option value="">Loading...</option>');

            // Make AJAX request to fetch subjects based on selected class
            $.ajax({
                url: '{{ route('fetch.subjects') }}',
                type: 'GET',
                data: {
                    class: classValue
                },
                success: function(response) {
                    // Remove loading option
                    subjectSelect.empty();

                    // Add options based on response
                    if (response.length > 0) {
                        response.forEach(function(subject) {
                            subjectSelect.append('<option value="' + subject.subject_name + '">' + subject.subject_name + '</option>');
                        });
                    } else {
                        subjectSelect.append('<option value="">No subjects available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    subjectSelect.empty().append('<option value="">Error fetching subjects</option>');
                }
            });
        });
    });
</script>
<x-footer />