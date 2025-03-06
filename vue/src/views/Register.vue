<template>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img
                class="mx-auto h-10 w-auto"
                src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company"
            />
            <h2
                class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900"
            >
                Register a new account
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" @submit="register">
                <div>
                    <label
                        for="username"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Username</label
                    >
                    <div class="mt-2">
                        <input
                            type="username"
                            name="username"
                            id="username"
                            autocomplete="username"
                            required
                            v-model="user.username"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password"
                            class="block text-sm/6 font-medium text-gray-900"
                            >Password</label
                        >
                        <div class="text-sm">
                            <a
                                href="#"
                                class="font-semibold text-indigo-600 hover:text-indigo-500"
                                >Forgot password?</a
                            >
                        </div>
                    </div>
                    <div class="mt-2">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            required
                            v-model="user.password"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password_confirmation"
                            class="block text-sm/6 font-medium text-gray-900"
                            >Confirm password</label
                        >
                    </div>
                    <div class="mt-2">
                        <input
                            type="password_confirmation"
                            name="password_confirmation"
                            id="password_confirmation"
                            autocomplete="current-password_confirmation"
                            required
                            v-model="user.password_confirmation"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />
                    </div>
                </div>
                <div>
                    <button
                        type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Sign in
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Not a member?
                <a
                    href="#"
                    class="font-semibold text-indigo-600 hover:text-indigo-500"
                    >Start a 14 day free trial</a
                >
            </p>
        </div>
    </div>
</template>

<script setup>
import store from "@/store";
import { useRouter } from "vue-router";

const router = useRouter();
const user = {
    username: "",
    password: "",
    password_confirmation: "",
};

const register = (ev) => {
    ev.preventDefault();
    store.dispatch("register", user).then((res) => {
        console.log("res: ", res);
        router.push({
            name: "dashboard",
        });
    });
};
</script>
