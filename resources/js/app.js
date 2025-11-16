import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import routes from './routes'

const router = createRouter({
  history: createWebHistory(),
  routes,
  linkActiveClass: 'font-bold'
})

createApp(App).use(router).mount('#app')
