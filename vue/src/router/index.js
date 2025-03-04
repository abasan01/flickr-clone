import { createWebHistory, createRouter } from 'vue-router'
import Login from "@/views/Login.vue";
import Register from "@/views/Register.vue";
import Dashboard from "@/views/Dashboard.vue";

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
        component: Dashboard
    }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router;