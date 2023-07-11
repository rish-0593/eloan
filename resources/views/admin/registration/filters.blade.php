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
                        @if (auth()->user()->id != $user->id)
                            <option value="{{ $user->id }}">{{ $user->name }} ( {{ $user->email }} )</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    @endcanassign

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>Search :</label>
                <input type="text" class="form-control" name="filter_search" placeholder="Search by name, mobile"
                    filter-search>
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <label>Product :</label>
                <select name="filter_product" id="filter_product" class="form-control" filter-data>
                    <option value="">Select Product</option>
                    @foreach ($products ?? [] as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <label>Loan Amount :</label>
                <select name="filter_loan_amount" id="filter_loan_amount" class="form-control" filter-data>
                    <option value="">Select Amount</option>
                    <option value="0-100000">Less than ₹1,00,000</option>
                    <option value="100000-300000">₹1,000,00 - ₹3,00,000</option>
                    <option value="300000-500000">₹3,00,000 - ₹5,00,000</option>
                    <option value="500000-1000000">₹5,00,000 - ₹10,00,000</option>
                    <option value="1000000-2000000">₹10,00,000 - ₹20,00,000</option>
                    <option value="2000000-5000000">₹20,00,000 - ₹50,00,000</option>
                    <option value="5000000-500000000000">More than ₹50,00,000</option>
                </select>
            </div>
        </div>
    </div>
</div>
