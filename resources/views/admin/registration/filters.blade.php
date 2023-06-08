<div class="card-header-form">
    @can('admin')
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label>Assign To :</label>
                    <select name="assign_to" id="assign_to" class="form-control">
                        <option value="">Select User</option>
                        @foreach ($users ?? [] as $user)
                            <option value="{{ $user->id }}">{{ $user->name }} ( {{ $user->email }} )</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    @endcan
</div>
