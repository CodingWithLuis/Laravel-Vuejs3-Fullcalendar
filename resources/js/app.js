require('./bootstrap');

import FullCalendarComponent from './components/FullCalendarComponent.vue';
import { createApp } from 'vue';

const app = createApp({});

app.component('calendar', FullCalendarComponent);
app.mount('#app');
