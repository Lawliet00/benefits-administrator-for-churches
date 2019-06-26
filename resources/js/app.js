/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/**
 * Componente para Listar la iglesias
 *
 * @author  Juan Rosas <JuanFBass17@gmail.com>
 */
Vue.component('churches-list', require('./components/app/churches/index-Component.vue').default);

/**
 * Componente para crear y editar iglesias
 *
 * @author  Juan Rosas <JuanFBass17@gmail.com>
 */
Vue.component('churches-create-edit-form', require('./components/app/churches/create-edit-form-Component.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
