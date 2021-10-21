import Vue from 'vue';
import Login from './views/auth/Login.vue';
import router from './router';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap';
import '../assets/css/app.min.css';
import '../assets/css/custom.css';

//support vuex
import Vuex from 'vuex'
Vue.use(Vuex)

import store from "./store"

Vue.component('login-form', require('./views/auth/Login').default)

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(Login)
});
