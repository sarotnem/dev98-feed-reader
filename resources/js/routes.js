import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import Article from '@/js/components/Article';
import NotFound from '@/js/components/NotFound';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/article/:id',
            name: 'article',
            component: Article,
            props: true
        },
        {
            path: '*',
            name: 'not-found',
            component: NotFound,
        }
    ]
})

export default router
