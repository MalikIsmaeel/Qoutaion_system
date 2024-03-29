/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Alpine from 'alpinejs'

window.Alpine = Alpine
window.Vue = require('vue');
import '../css/app.css';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import './../../vendor/power-components/livewire-powergrid/dist/powergrid'
import './../../vendor/power-components/livewire-powergrid/dist/powergrid.css'
Alpine.start()

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

window.toastr = require('toastr');
window.toastr.options = {
    "progressBar": true
};
// Reference from published scripts
// require('./vendor/livewire-ui/modal');


// Reference from vendor
// require('../../vendor/livewire-ui/modal/resources/js/modal');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
