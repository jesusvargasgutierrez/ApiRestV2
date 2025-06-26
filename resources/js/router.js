import Vue from 'vue';
import VueRouter from 'vue-router';

import ViewAccount from './components/account_view.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/account/:id', component: ViewAccount, props: true }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;