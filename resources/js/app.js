/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Registering Vue Components
 *
 * @description We will register our components to use them globaly in out application.
 * @version 1.0.0
 */

// Sidebar Container
Vue.component('v-sidebar', require('./components/Sidebar/Sidebar.vue').default);
// Sidebar Components
Vue.component('v-sidebar-brand', require('./components/Sidebar/Components/SidebarBrand.vue').default);
Vue.component('v-sidebar-menu-container', require('./components/Sidebar/Components/SidebarMenuContainer.vue').default);
Vue.component('v-sidebar-menu-nav', require('./components/Sidebar/Components/SidebarMenuNav.vue').default);
Vue.component('v-sidebar-menu-link', require('./components/Sidebar/Components/SidebarMenuLink.vue').default);

// Form Components
Vue.component('v-form-group', require('./components/Forms/Components/FormGroup.vue').default);

// Input Components
Vue.component('v-text-input', require('./components/Forms/Components/Input/TextInput.vue').default);
Vue.component('v-password-input', require('./components/Forms/Components/Input/PasswordInput.vue').default);

Vue.component('v-form-label', require('./components/Forms/Components/FormLabel.vue').default);
Vue.component('v-form-error', require('./components/Forms/Components/Validation/ErrorAlert.vue').default);


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
