<script setup></script>

<template>
    <h1>Hello App!</h1>

    <p><strong>Current route path:</strong> {{ $route.fullPath }}</p>
    <nav>
        <RouterLink to="/dashboard">Go to Dasboard</RouterLink>
        <RouterLink to="/login">Go to Login</RouterLink>
        <RouterLink to="/register">Go to Register</RouterLink>
    </nav>
    <main>
        <RouterView></RouterView>
    </main>
</template>

<style scoped></style>
