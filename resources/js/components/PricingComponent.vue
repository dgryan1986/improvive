<template>
<div class="container">
    <div class="p-3 text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Check out our competitive pricing for our maintenance software. We have built an amazing product for an inexpensive price.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Basic Team</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title">$10 <small class="text-muted">/ mo<br>per-person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unlimited Assets</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <a href="/payments/create" role="button" class="btn btn-lg btn-block btn-outline-primary">Free Trial</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro Team</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title">$25 <small class="text-muted">/ mo<br>per-person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <a href="/payments/create" role="button" class="btn btn-lg btn-block btn-primary">Get started</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise Team</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title">$100 <small class="text-muted">/ mo<br>per-person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <a href="/payments/create" role="button" class="btn btn-lg btn-block btn-primary">Contact us</a>
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