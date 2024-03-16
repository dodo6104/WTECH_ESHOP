// import { createApp } from 'vue'
// import App from './App.vue'
// import router from './router/index.js'


// createApp(App).mount('#app')

// createApp(App).use(router).mount('#app');

import { createApp } from 'vue'
import App from './App.vue'
import router from './router' // Import the router instance

// Create the Vue app instance and use Vue Router
createApp(App).use(router).mount('#app')