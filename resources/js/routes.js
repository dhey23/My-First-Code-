import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter);

const routes =[
    {  
        path:'/',
        
        component: require('./components/pages/home.vue').default
    },
    {  
        path:'/tags',
       
        component: require('./components/pages/tags.vue').default
    }
];
export default new VueRouter({
        mode:'history',
        routes
}) 