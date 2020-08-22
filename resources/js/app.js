/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


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
                .then(response => alert('You are subscribed to Newsletters!'))
                .catch(err => console.log('catch error!') );
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
  title: 'Mobile Responsive Design',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/rock.jpg",
  content: 'Mobile is becoming more and more prevalent and becoming a focal point of business processes. Responsive Web Design makes your web page look good on all devices (desktops, tablets, and phones). It helps to make your website visitors happy.'
}, {
  title: 'Blazing-Fast page loading',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/grooves.jpg",
  content: 'Our hand crafted customize websites through the optimization rules for the online resources properly, theyve been tested and proven and they underpin the work we do every day, thus the website load in faster manner. We may host the website in our blazing fast USA server for monthly $2. *You will get first month for free. '
}, {
  title: 'Hand crafted & Secure',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/arch.jpg",
  content: 'We use hand crafted fast technology architecture. Faster than any WordPress site. If you dont believe me then just compare our site with any other CMS site on Google Page Insights. Im pretty sure our hand crafted websites wins the race.Our static websites will not have any database to manipulate. So 100 times safer than WordPress. But nothing is un-hackable. '
}, {
  title: 'Web Compatibility',
  img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/5689/sunset.jpg",
  content: 'A site should easily render on various resolutions, screen sizes, and browsers; and with the increasing popularity of mobile devices, websites should function properly on the plethora of these types of devices'
}]
// boot up demo
new Vue({
  el: '#demo',
  data: {
    items: items
  }
})
