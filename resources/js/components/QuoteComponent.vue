<template>
  <div class="container">
    <h1 class="display-5 pb-2">Quotes <span class="float-right badge badge-pill badge-secondary">Team</span></h1>
    <div class="card">
        <div class="card-header font-weight-bold"><i class="fas fa-comments-alt-dollar pr-1"></i>
            Current Quotes
            <div class="dropdown float-right">
                <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fad fa-layer-plus"></i> New
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button"><i class="fas fa-layer-plus"></i> Add Quote</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-share-square"></i> Share Quotes</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-route"></i> Assign Quotes</button>
                    <button class="dropdown-item" type="button"><i class="fas fa-share-square"></i> Create Work Order</button>
                </div>
            </div>
        </div>
        <div class="card-body clearfix">
            <ul class="list-group">
            <li class="list-group-item justify-content-center">
                        
                    <button class="btn btn-outline-danger btn-sm float-right ml-1">
                        Delete Quote
                    </button>
                    <button class="btn btn-outline-warning btn-sm float-right">
                        Edit Quote
                    </button>
                </li>
            </ul>
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