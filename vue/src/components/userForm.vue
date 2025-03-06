<template>
    <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900"
            >Email address</label
        >
        <div class="mt-2">
            <input
                type="email"
                name="email"
                id="email"
                autocomplete="email"
                required
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
                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
            />
        </div>
    </div>
</template>

<script>
export default {
    name: "userForm",
};
</script>
