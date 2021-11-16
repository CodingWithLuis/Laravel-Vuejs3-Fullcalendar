<template>
    <div>
       <FullCalendar :options="calendarOptions" />     
    </div>
</template>
<script>

import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'

import axios from 'axios'

export default {
  components: {
    FullCalendar // make the <FullCalendar> tag available
  },
  data() {
    return {
      calendarOptions: {
        plugins: [ dayGridPlugin ],
        initialView: 'dayGridMonth',
        eventSources: [
            {
              events: function(fetchInfo, successCallback, failureCallback) {

                axios.get('/api/events').then(response => {
                    successCallback(response.data.data)
                });
              }
            }
          ]
      },
    }
  },
}
</script>
