<template>
<div class="container">
    <div class="container">
    <div class="jumbotron">
        <h1 class="display-4">
        Time Management
        </h1>
        <p class="lead">
        This is a modified jumbotron that occupies the entire horizontal space of its parent.
        </p>
    </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header bg-info text-white">
            <h6 class="float-left"><i class="fas fa-inventory mr-1"></i> 
                <strong>
                    Employees
                </strong>
            </h6>
            </div>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Work Order</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Location</th>
                    <th scope="col">Technician</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>  
    </div>
    
        <div class="row">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-info text-white"><h6 class="float-left"><i class="fas fa-wrench mr-1"></i> <strong>Stock Inventory</strong></h6></div>
                <div class="card-body"><h5 class="card-title font-weight-bold">Service Management</h5>
                    <p class="card-text">Manage your Preventive Maintenance, Job Plans, Service Tickets, and much more.</p>
                    <a href="/work-orders" class="btn btn-outline-info btn-sm">Work Orders</a>
                    <a href="/work-orders" class="btn btn-warning btn-sm">Create Work Order</a>
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