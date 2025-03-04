<template>
    <div class="message-model">
        <p>{{ message }} test</p>
    </div>
</template>

<script setup>
import { ref } from "vue";
const message = ref("Hsello from       Vue .js");
</script>

<style scoped>
.message-model {
    border: 10px solid yellow;
    text-align: center;
    border-radius: 10px;
    width: 80%;
    margin: auto;
    background-color: yellow;
}
.message-model p {
    font-weight: bold;
    font-size: 60px;
}
</style>
