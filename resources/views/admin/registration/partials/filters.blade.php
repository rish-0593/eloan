<div class="card-header-form">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>Assign To :</label>
                <select name="filter_assign_to" class="form-control" filter-data>
                    <option value="">Select User</option>
                    @foreach ($users ?? [] as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} ( {{ $user->email }} )</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Registration Status :</label>
                <select name="filter_registration_status" class="form-control" filter-data>
                    <option value="">Select Status</option>
                    <option value="completed">Completed</option>
                    <option value="incompleted">Incompleted</option>
                </select>
            </div>
        </div>
    </div>
</div>
