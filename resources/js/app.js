/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue'); 

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    'example-component', 
    require('./components/ExampleComponent.vue').default
);

Vue.component(
    'dashboard-component', 
    require('./components/DashboardComponent.vue').default
);

Vue.component(
    'project-dashboard',
    require('./components/ProjectDashboard.vue').default
);

Vue.component(
    'task-dashboard',
    require('./components/TaskDashboard.vue').default
);

Vue.component(
    'welcome-component',
    require('./components/WelcomeComponent.vue').default
);

Vue.component(
    'about-component',
    require('./components/AboutComponent.vue').default
);

Vue.component(
    'features-component',
    require('./components/FeaturesComponent.vue').default
);

Vue.component(
    'pricing-component',
    require('./components/PricingComponent.vue').default
);

Vue.component(
    'services-component',
    require('./components/ServicesComponent.vue').default
);

Vue.component(
    'operations-component',
    require('./components/OperationsComponent.vue').default
);

Vue.component(
    'team-component',
    require('./components/TeamComponent.vue').default
);

Vue.component(
    'workorder-component',
    require('./components/WorkOrderComponent.vue').default
);

Vue.component(
    'project-component',
    require('./components/ProjectComponent.vue').default
);

Vue.component(
    'time-component',
    require('./components/TimeComponent.vue').default
);

Vue.component(
    'task-component',
    require('./components/TaskComponent.vue').default
);

Vue.component(
    'department-component',
    require('./components/DepartmentComponent.vue').default
);

Vue.component(
    'vendor-component',
    require('./components/VendorComponent.vue').default
);

Vue.component(
    'sales-component',
    require('./components/SalesComponent.vue').default
);

Vue.component(
    'employee-component',
    require('./components/EmployeeComponent.vue').default
);

Vue.component(
    'location-component',
    require('./components/LocationComponent.vue').default
);

Vue.component(
    'quote-component',
    require('./components/QuoteComponent.vue').default
);

Vue.component(
    'dispatch-component',
    require('./components/DispatchComponent.vue').default
);

Vue.component(
    'status-component',
    require('./components/StatusComponent.vue').default
);

Vue.component(
    'asset-component',
    require('./components/AssetComponent.vue').default
);

Vue.component(
    'customer-component',
    require('./components/CustomerComponent.vue').default
);

Vue.component(
    'customer-dashboard',
    require('./components/CustomerDashboard.vue').default
);

Vue.component(
    'management-component',
    require('./components/ManagementComponent.vue').default
);

//This is where we will put the call center from Twilio Flex.
Vue.component(
    'reception-component',
    require('./components/ReceptionComponent.vue').default
);

Vue.component(
    'asset-component',
    require('./components/AssetComponent.vue').default
);

// Vue.component(
//     '',
//     require('./components')
// );

//Laravel Passport Components
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});