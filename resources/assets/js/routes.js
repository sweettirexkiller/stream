import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home'),
    },
    {
        path: '/about',
        component: require('./views/About'),
    },
    {
        path: '/contact',
        component: require('./views/Contact'),
    },
    {
        path: '/scoped',
        component: require('./views/MenuList'),
    }
];
export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});