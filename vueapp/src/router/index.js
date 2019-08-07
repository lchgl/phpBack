import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Video from '@/components/Videos'
import Page from '@/components/Page'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
        path: '/video',
        name: 'video',
        component: Video
    },
    {
        path: '/page/:lessonId',
        name: 'page',
        component: Page
    }
  ]
})
