  <div class="main-wrapper">
        <x-header />
        <x-sidebar />

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Subject</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Subject</a></li>
                                <li class="breadcrumb-item active">Add Subject</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('subjects.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Subject Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Subject ID <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="subject_id" value="{{ old('subject_id') }}">
                                                @if ($errors->has('subject_id'))
                                                <span class="text-danger">{{ $errors->first('subject_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Subject Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="subject_name" value="{{ old('subject_name') }}">
                                                @if ($errors->has('subject_name'))
                                                <span class="text-danger">{{ $errors->first('subject_name') }}</span>
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