require('./bootstrap');
window.Vue = require('vue').default;
//import App from './App.vue';
//import router from './router';

Vue.component('customer_form_create',require('./components/customer_create_form.vue').default);
Vue.component('customer_form_list',require('./components/customer_list.vue').default);
Vue.component('dashboard_account',require('./components/account_dashboard.vue').default);
Vue.component('view_account',require('./components/account_view.vue').default);
Vue.component('list_account',require('./components/account_list.vue').default);
Vue.component('court_form',require('./components/court_form.vue').default);
Vue.component('calce_form',require('./components/calce_form.vue').default);
Vue.component('checkout_form',require('./components/checkout_form.vue').default);
Vue.component('ranking_list',require('./components/ranking_list.vue').default);
Vue.component('create_court',require('./components/create_court_form.vue').default);

const app = new Vue({
    el:'#app'
});

//const app = createApp(App);
//app.use(router);
//app.mount('#app');
