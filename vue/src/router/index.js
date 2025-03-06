import { createWebHistory, createRouter } from 'vue-router'
import Login from "@/views/Login.vue";
import Register from "@/views/Register.vue";
import Dashboard from "@/views/Dashboard.vue";
import store from '@/store';

const routes = [
    {
        path: "/login",
        name: "login",
        component: Login
    },
    
    {
        path: "/register",
        name: "register",
        component: Register
    },
    
    {
        path: "/dashboard",
        name: "dashboard",
        meta: {requiresAuth: true},
        component: Dashboard
    }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

router.beforeEach((to, from, next) =>{
    console.log("to: ", to.name, "from: ", from.name, "next: ", next.name, "store: ", store.state.user.token)
    if (to.meta.requiresAuth && !store.state.user.token){
        next({name:"login"})
    }else if (store.state.user.token && (to.name ==="login" || to.name === "register")){
        next ({name: "dashboard"});
    }
    else{
        next();
    }
})

export default router;