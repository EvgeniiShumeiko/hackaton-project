/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Element from 'element-ui';
import locale from 'element-ui/lib/locale/lang/ru-RU';
import WebRTC from 'vue-webrtc';


window.Vue = require('vue');
window.Vue.use(Element, { locale });
window.Vue.use(WebRTC);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-work', require('./components/HomeWork.vue').default);
Vue.component('cabinet-tab', require('./components/CabinetTab.vue').default);
Vue.component('teacher-tab', require('./components/TeacherTab.vue').default);
Vue.component('metodist-tab', require('./components/MetodistTab.vue').default);
Vue.component('web-rtc', require('./components/Web.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});