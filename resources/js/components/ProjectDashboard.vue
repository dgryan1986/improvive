<template>
  <div class="container">
    <h1 class="display-5 pb-2">Projects <span class="float-right badge badge-pill badge-dark">Team Name</span></h1>

    <div class="card">
        <div class="card-header font-weight-bold"><i class="fas fa-project-diagram mr-1"></i>
            Citizens Hope Project
            <div class="dropdown float-right">
                <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fad fa-layer-plus"></i> New
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><i class="fas fa-layer-plus"></i> Add Task</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-share-square"></i> Share Project</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-route"></i> Route Project</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-share-square"></i> Create Work Order</button>
                </div>
            </div>
        </div>
        <!-- End Card Header -->

        <!-- Main Project Container end -->
        
    <div class="d-flex row m-1">
        <div class="card-body d-flex justify-content-start">
                <h5 class="card-subtitle mb-2 text-muted order-1 mr-1"><span type="button" class="badge badge-pill badge-secondary">Summary</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Scope of Work</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Material</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Project Cost</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Project Tasks</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Documents</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Images</span></h5>
                <h5 class="card-subtitle mb-2 text-muted order-2 mr-1"><span type="button" class="badge badge-pill badge-secondary">Timeline</span></h5>
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