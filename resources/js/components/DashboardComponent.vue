<template>
<div class="container">
        <h3>Teams<span class="float-right"><i class="fas fa-arrows"></i></span></h3>
        <p class="text-muted">Everything you need to make sure your team is up and running!</p>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="float-left"><i class="fas fa-alarm-clock mr-1"></i><strong>Time Sheet</strong></h6>
                    </div>
                    <div class="card-body hater">
                        <h5 class="card-title font-weight-bold">Time Management</h5>
                        <p class="card-text">Adjust your time here. Add time for corresponding work orders and much more.</p>
                        <a href="/user-time" class="btn btn-outline-info btn-sm">My Time</a>
                        <a href="/user-time" class="btn btn-outline-info btn-sm">Staff Time</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="float-left"><i class="fas fa-users mr-1"></i><strong>Team Sheet</strong></h6>
                    </div>
                    <div class="card-body hater">
                        <h5 class="card-title font-weight-bold">Team Management</h5>
                        <p class="card-text">Here you can communicate with your team! Just click below and set up correspondence.</p>
                        <a href="/team" class="btn btn-outline-info btn-sm">Teams</a>
                        <a href="/team" class="btn btn-outline-info btn-sm">Add Employee</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="float-left"><i class="fas fa-users mr-1"></i><strong>Team Communication</strong></h6>
                    </div>
                    <div class="card-body hater">
                        <h5 class="card-title font-weight-bold">Team Chat</h5>
                        <p class="card-text">Here you can communicate with your team in a live chat. Get real time information on what's going on within your organization.</p>
                        <a href="/team" class="btn btn-outline-info btn-sm">Team Chat</a>
                        <a href="/team" class="btn btn-outline-info btn-sm">Email</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="float-left"><i class="fas fa-location-arrow mr-1"></i><strong>Tech Dispatch</strong></h6>
                    </div>
                    <div class="card-body hater">
                        <h5 class="card-title font-weight-bold">Personnel & Tracking</h5>
                        <p class="card-text">Here you can communicate with your team in a live chat. Get real time information on what's going on within your organization.</p>
                        <a href="/team" class="btn btn-outline-info btn-sm">Locate Techs</a>
                        <a href="/team" class="btn btn-outline-info btn-sm">Call</a>
                        <a href="/team" class="btn btn-outline-info btn-sm">SMS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr size="30">
        </div>

        <h3>Operations<span class="float-right"><i class="fas fa-arrows"></i></span></h3>
        <p class="text-muted">Run your operation by choosing from the selection below!</p>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="float-left"><i class="fas fa-inventory mr-1"></i> <strong>Inventory</strong></h6>
                    </div>
                    <div class="card-body hater">
                        <h5 class="card-title font-weight-bold">Asset Management</h5>
                        <p class="card-text">Adjust your assets and logistics here. Don't waste time with this headache, Delta will do this for you!</p>
                        <a href="/inventory" class="btn btn-outline-info btn-sm">Manage Assets</a>
                        <a href="/inventory" class="btn btn-outline-info btn-sm">Create Asset</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="float-left"><i class="fas fa-wrench mr-1"></i> <strong>Work Orders</strong></h6>
                    </div>
                    <div class="card-body hater">
                        <h5 class="card-title font-weight-bold">Service Management</h5>
                        <p class="card-text">Manage your Preventive Maintenance, Job Plans, Service Tickets, and much more.</p>
                        <a href="/workorders" class="btn btn-outline-info btn-sm">Work Orders</a>
                        <a href="/workorders" class="btn btn-outline-info btn-sm">Create Work Order</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h6 class="float-left"><i class="fas fa-pencil mr-1"></i> <strong>Quotes</strong></h6>
                            </div> 
                            <div class="card-body hater">
                                <h5 class="card-title font-weight-bold">Quote Management</h5>
                                <p class="card-text">Don't spend tons of times building Quotes from scratch. Build your quotes here!</p>
                                <a href="/quotes" class="btn btn-outline-info btn-sm">Quotes</a>
                                <a href="/quotes" class="btn btn-outline-info btn-sm">Add Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-header bg-info text-white">
                                <h6 class="float-left"><i class="fas fa-clipboard-list mr-1"></i> <strong>Projects</strong></h6>
                            </div>
                            <div class="card-body hater">
                                <h5 class="card-title font-weight-bold">Project Management</h5>
                                <p class="card-text">Manage all of your projects here. Add teams to projects, associate cost, and much more.</p>
                                <a href="/projects" class="btn btn-outline-info btn-sm">Projects</a>
                                <a href="/projects" class="btn btn-outline-info btn-sm">Add Project</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h6 class="float-left"><i class="fas fa-user-cog mr-1"></i> <strong>Customers</strong></h6>
                            </div>
                            <div class="card-body hater">
                                <h5 class="card-title font-weight-bold">Customer Management</h5>
                                <p class="card-text">Build your customer base here! Add service locations, schedule jobs, and much more!</p>
                                <a href="/customers" class="btn btn-outline-info btn-sm">Customers</a>
                                <a href="/customers" class="btn btn-outline-info btn-sm">Create Customer</a>
                                <a href="/customers" class="btn btn-outline-info btn-sm">Call</a>
                                <a href="/customers" class="btn btn-outline-info btn-sm">SMS</a>
                                <a href="/customers" class="btn btn-outline-info btn-sm">Schedule</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h6 class="float-left"><i class="fas fa-tasks mr-1"></i> <strong>Tasks</strong></h6>
                            </div>
                            <div class="card-body hater">
                                <h5 class="card-title font-weight-bold">Task Management</h5>
                                <p class="card-text">Have some task? Need to assign some task to someone else? Forget email and keep it simple!</p>
                                <a href="/tasks" class="btn btn-outline-info btn-sm">Tasks</a>
                                <a href="/tasks" class="btn btn-outline-info btn-sm">Create Task</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            //
        }
    }
</script>