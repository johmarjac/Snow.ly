
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// Register $ global var for jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;

window.Vue = require('vue');

window.FontAwesomeConfig =
{
    searchPseudoElements: true
}

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('header-menu', require('./components/HeaderMenu.vue'));
Vue.component('html-editor', require('./components/HTMLEditor.vue'));
Vue.component('api-form', require('./components/APIForm.vue'));

Vue.config.productionTip = false;

$( document ).ready(function()
{
    const app = new Vue(
    {
        el: '.vue'
    });
})
