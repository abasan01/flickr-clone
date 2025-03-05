<script setup>
const props = defineProps({
    image: {
        type: Object,
        required: true,
    },
});
console.log();
</script>

<template>
    <div class="group relative">
        <div
            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
            :style="{ backgroundImage: `url('${image.imageSrc}')` }"
        >
            <div class="mt-4 flex justify-between">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-sm text-gray-700">
                        <a :href="image.href">
                            <span aria-hidden="true" class="absolute inset-0" />
                            {{ image.name }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        {{ image.author }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
div {
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}
</style>
