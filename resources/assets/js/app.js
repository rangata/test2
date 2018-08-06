
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
import colors from 'vuetify/es5/util/colors'

// import VueMaterial from 'vue-material'
// import 'vue-material/dist/vue-material.min.css'

import VueRouter from 'vue-router';
import {routes} from './routes';

// Vue.use(VueMaterial)
Vue.use(VueRouter);

Vue.use(Vuetify, {
    // iconfont: 'fa',
    theme: {
        primary: colors.red.darken1, // #E53935
        secondary: colors.red.lighten4, // #FFCDD2
        accent: colors.indigo.base // #3F51B5
    }
})

const router = new VueRouter({
    routes

});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('home', require('./components/home.vue'));

const app = new Vue({
    el: '#app',
    router,
    data: () => ({
        drawer: false,
        items: [
            { icon: 'lightbulb_outline', text: 'Notes' },
            { icon: 'touch_app', text: 'Reminders' },
            { divider: true },
            { heading: 'Labels' },
            { icon: 'add', text: 'Create new label' },
            { divider: true },
            { icon: 'archive', text: 'Archive' },
            { icon: 'delete', text: 'Trash' },
            { divider: true },
            { icon: 'settings', text: 'Settings' },
            { icon: 'chat_bubble', text: 'Trash' },
            { icon: 'help', text: 'Help' },
            { icon: 'phonelink', text: 'App downloads' },
            { icon: 'keyboard', text: 'Keyboard shortcuts' }
        ]
    }),
    props: {
        source: String
    }

});
