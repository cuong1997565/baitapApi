import Vue from 'vue';
import VueRouter from 'vue-router';
// import App from './App.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [

    ]
});

new Vue({
    el: '#app',
    router: router,
    render: app => app(App)
});
