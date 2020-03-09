<div role="tabpanel" class="tab-pane" id="add">
<!-- Form starts here -->
    <form action="/accountabilities" method="POST">
    @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
        <label>Full Name</label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Full Name here..." required>
        </div>

        <div class="col-md-4 mb-3">
        <label>Company</label>
        <input type="text" class="form-control" name="company" value="{{old('company')}}" placeholder="Company here..." required>
        </div>

        <div class="col-md-4 mb-3">
        <label>Designation</label>
        <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation here..." required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
        <label>Location</label>
        <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Location here..." required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email here..." value="{{old('email')}}"  required>
        </div>
    </div>

    <div class="form-row">
        <input type="hidden" class="form-control" name="status" value="false">
    </div>
    <br>
    <button class="btn btn-block btn-outline-primary" type="submit">Submit form</button>
    </form>
<!-- Form ends here -->
</div>