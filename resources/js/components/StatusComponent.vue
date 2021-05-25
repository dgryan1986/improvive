<template>
<div class="container-fluid">

    <div class="container">
        <div class="alert alert-info alert-dismissible collapse" role="alert" id="alert">
            <strong>Ya Ya!</strong> You have been clocked in.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <h1 class="display-5 pb-2">Dashboard <span class="float-right badge badge-pill badge-secondary" id="badgePill">Improvive</span></h1>
    </div>

<div class="container text-center">
    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-compass"></i> Status
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Clock In</button>
            <button class="dropdown-item" type="button">Break</button>
            <button class="dropdown-item" type="button">Busy</button>
            <button class="dropdown-item" type="button">Available</button>
            <button class="dropdown-item" type="button">Clock Out</button>
        </div>
    </div>

    <hr size="30">

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