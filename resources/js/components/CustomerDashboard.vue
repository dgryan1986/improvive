<template>
    <div class="container">
    <h1 class="display-5 pb-2">Customers <span class="float-right badge badge-pill badge-dark">Team Name</span></h1>

    <div class="card">
        <div class="card-header font-weight-bold"><i class="far fa-file-user mr-1"></i>
            Sarah Jenkins
            <div class="dropdown float-right">
                <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-layer-plus"></i> New
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><i class="fas fa-layer-plus"></i> Add Task</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-share-square"></i> Email Sarah</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-user-headset"></i> Call Sarah</button>
                    <button class="dropdown-item" type="button"><i class="fad fa-tools"></i> Create Work Order</button>
                    <button class="dropdown-item" type="button"><i class="far fa-calendar-alt"></i> Schedule Meeting</button>
                </div>
            </div>
        </div>
        <!-- End Card Header -->

        <!-- Main Project Container end -->
        
        
        
    <div class="container-fluid p-3">
        <div class="card shadow rounded">

            <div class="card-header bg-info text-white font-weight-bold">
                Account Info
            </div>

            <div class="card-body d-flex">
                    <h5 class="card-subtitle mb-2 text-muted order-1 mr-1"><span type="button" class="badge badge-pill badge-secondary">Account Info</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Financial Data</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Service Locations</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Bill To Locations</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Assets</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Documents</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">History</span></h5>
                    <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Logs</span></h5>
            </div>
            
            <div class="container">
                <hr size="50">
            </div>

            <div class="container">
                <p class="font-weight-bold">Primary Contact</p>
                <form class="mb-3">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                        <label for="validationServer01">First name</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="validationServer02">Last name</label>
                        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="validationServerUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
                            <div class="invalid-feedback">
                            Please choose a username.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationServer03">City</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="validationServer04">State</label>
                    <select class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="validationServer05">Zip</label>
                    <input type="text" class="form-control is-invalid" id="validationServer05" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>

        </div>

    </div>

        
    </div>
</div>
</template>