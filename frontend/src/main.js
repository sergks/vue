import Vue from 'vue'
import App from './App.vue'
import router from './router'
import Axios from "axios";

import DefaultLayout from '@/layouts/default-layout'
import LoginLayout from '@/layouts/login-layout'

Vue.config.productionTip = false

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.component('default-layout', DefaultLayout);
Vue.component('loginLayout', LoginLayout);

Vue.prototype.$http = Axios.create({
  baseURL: 'http://localhost:1199/v1'
});

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
