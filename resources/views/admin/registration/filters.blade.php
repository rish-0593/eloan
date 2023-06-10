<div class="card-header-form">
    @canassign('admin')
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label>Assign To :</label>
                    <select name="assign_to" id="assign_to" class="form-control">
                        <option value="">Select User</option>
                        @cannot('admin')
                            <option value="0">Revert Assign</option>
                        @endcannot

                        @foreach ($users ?? [] as $user)
                            @if(auth()->user()->id != $user->id)
                                <option value="{{ $user->id }}">{{ $user->name }} ( {{ $user->email }} )</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    @endcanassign
</div>
