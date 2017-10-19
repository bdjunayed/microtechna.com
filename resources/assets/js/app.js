
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
/*import Tab from './tab.js';*/
window.axios = axios;
window.Form = Form;
/*window.Tab = Tab;*/


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
// define slider component
var items = [{
  title: 'Article 1',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/rock.jpg",
  content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex arcu, fringilla in urna quis, ultrices efficitur neque. Morbi lacinia arcu tellus, a imperdiet'
}, {
  title: 'Article 2',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/grooves.jpg",
  content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex arcu, fringilla in urna quis, ultrices efficitur neque. Morbi lacinia arcu tellus, a imperdiet'
}, {
  title: 'Article 3',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/arch.jpg",
  content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex arcu, fringilla in urna quis, ultrices efficitur neque. Morbi lacinia arcu tellus, a imperdiet'
}, {
  title: 'Article 4',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/sunset.jpg",
  content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex arcu, fringilla in urna quis, ultrices efficitur neque. Morbi lacinia arcu tellus, a imperdiet'
}]



// boot up demo
new Vue({
  el: '#demo',
  data: {
    items: items
  }
})
