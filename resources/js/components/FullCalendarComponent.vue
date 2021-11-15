<template>
    <div>
       Hello world
       <FullCalendar :options="calendarOptions"  />     
    </div>
</template>
<script>

import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
 data() {
    return {
      calendarOptions: {
        plugins: [ dayGridPlugin ],
        initialView: 'dayGridMonth',
        events: [
          { title: 'event 1', date: '2021-11-11' },
          { title: 'event 2', date: '2021-11-05' }
        ]
      }
    }
  }}
</script>
