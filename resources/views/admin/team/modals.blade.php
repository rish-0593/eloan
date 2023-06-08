<div class="modal fade" id="addOrUpdate" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" data-modal-title>Add <span></span> Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="add-update-module" action="{{ route('admin.team.add.or.update', [$role]) }}">
                    @csrf
                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Username/Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email" autocomplete="new-email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="add-or-update">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" data-modal-title>Update Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="password-module" action="{{ route('admin.team.update.password', [$role]) }}">
                    @csrf
                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary m-t-15 waves-effect px-4" id="update-password">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
