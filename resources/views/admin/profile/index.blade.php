<x-admin-layout>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card author-box">
                            <div class="card-body">
                                <div class="author-box-center">
                                    <div class="author-box-name">
                                        <h4 class="user-name">{{ Auth::user()->name }}</h4>
                                    </div>
                                    <div class="author-box-job mt-2">
                                        <h6 id="user-role">({{ implode( ', ', Auth::user()->getRoleNames()->toArray()) }})</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">
                            <div class="padding-20">
                                <div class="tab-content tab-bordered">
                                    <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="profile-tab2">
                                        <form method="post">
                                            <div class="card-header">
                                                <h4>Update Profile</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-12 col-12">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                                    </div>
                                                    <div class="form-group col-md-12 col-12">
                                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                @can('admin')
                                    <div class="tab-content tab-bordered mt-4">
                                        <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="profile-tab2">
                                            <form method="post">
                                                <div class="card-header">
                                                    <h4>Update Password</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-md-12 col-12">
                                                            <label>New Password</label>
                                                            <input type="password" class="form-control" name="password" required>
                                                        </div>
                                                        <div class="form-group col-md-12 col-12">
                                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="scripts">
        <script>
            let update_url = "{{ route('admin.profile.update') }}";
        </script>

        @include('admin.profile.script')
    </x-slot>
</x-admin-layout>
