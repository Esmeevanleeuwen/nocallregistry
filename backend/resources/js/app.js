require('./bootstrap');

import { createApp } from 'vue';
import RequestForm from './components/RequestForm.vue';
import ContactForm from './components/ContactForm.vue';

const app = createApp({});
app.component('request-form', RequestForm);
app.component('contact-form', ContactForm);
app.mount('#app');
