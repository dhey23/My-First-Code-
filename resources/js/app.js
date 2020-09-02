require('./bootstrap');
window.Vue = require('vue')
import router from './routes'

import ViewUI from 'view-design'

import 'view-design/dist/styles/iview.css'
Vue.use(ViewUI);

Vue.component('app', require('./App.vue').default);

const app = new Vue({
    el: '#app',
    router
});
