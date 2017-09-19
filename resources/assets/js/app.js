
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
//
// window.Vue = require('vue');
try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';
window.axios = axios;
window.Form = Form;

new Vue({
    el: '#newsletters',
    data: {
        nl: new Form({
            email: ''
        })
    },
    methods: {
        onSubmit() {
            this.nl.post('/newsletter')
                .then(response => alert('Subscribed!'))
                .catch((err) => console.log('err') );
        }
    }
});

new Vue({
    el: '#contactForm',
    data: {
        form: new Form({
            name: '',
            email: '',
            company: '',
            message: ''
        })
    },

    methods: {
        onSubmit() {
            this.form.post('/work_with_us')
                .then(response => alert('Thank you! Your message has been sent!'))
                .catch((err) => console.log('err'));
        }
    }
});
