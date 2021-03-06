/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Index from './components/Index'
import Weathers from './components/Weathers'

const routes = [
    { path: '/', component: Index },
    { path: '/results', component: Weathers }
]

const router = new VueRouter({
    routes,
    mode: 'history'
})

Vue.component('app', require('./components/App.vue').default);



const app = new Vue({
    router
}).$mount('#app');
