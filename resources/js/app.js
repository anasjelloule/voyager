
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'

import VueRouter from 'vue-router'
import routes from './routes'
import Vuex from 'vuex'
import stores from './stores'
require('./bootstrap');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('front-menu', require('./components/FrontMenu').default);
Vue.use(VueRouter)
Vue.use(Vuex)

const router = new VueRouter({
    mode: 'history',
    routes
})

const store = new Vuex.Store(stores)
const app = new Vue({
    el: '#app',
    router,
    store
});
