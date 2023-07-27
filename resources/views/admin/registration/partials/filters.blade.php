<div class="card-header-form">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>Search :</label>
                <input type="search" class="form-control" name="filter_search" placeholder="Search by name, mobile"
                    filter-search export>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>Assigned To :</label>
                <select name="filter_assign_to" class="form-control" filter-data export>
                    <option value="">Select User</option>
                    @foreach ($users ?? [] as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} ( {{ $user->email }} )</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>City :</label>
                <select name="filter_city" id="filter_city" class="form-control select2" filter-data export>
                    <option value="">Select City</option>
                    @foreach ($cities ?? [] as $city)
                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>Registration Status :</label>
                <select name="filter_registration_status" class="form-control" filter-data export>
                    <option value="">Select Status</option>
                    <option value="completed">Completed</option>
                    <option value="incompleted">Incompleted</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>Date :</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="filter_date" id="datetimepicker" readonly export>
                    <div class="input-group-prepend" style="border: 1px solid #6b7280;">
                        <button class="btn clear-date">
                            X
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
