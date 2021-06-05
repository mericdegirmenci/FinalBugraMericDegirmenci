<h4>Create Student</h4>
<form action=post>
    <div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 offset-md-4">
                <h4>Register</h4>
                <hr>
                <form action="{{ route('student.save') }}" method="post">           
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Student Name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="surmane">Surname</label>
                            <input type="text" class="form-control" name="surname" placeholder="Enter Number"
                                value="{{ old('surname') }}">
                        </div>
                        <div class="form-group">
                            <label for="department">Surname</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Number"
                                value="{{ old('department') }}">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Create</button>
                        <br>
                    </form>
            </div>
        </div>
    </div>
</form>