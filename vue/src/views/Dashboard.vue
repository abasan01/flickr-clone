<script setup>
import imageButton from "../components/imageComponent.vue";

const images = [
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 2,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/54/cb/54cb64c80f5be4cf1f2d60e3a8015546.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 1216,
        height: 1680,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://images.unsplash.com/photo-1575936123452-b67c3203c357?fm=jpg",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 3000,
        height: 2000,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
    {
        id: 1,
        name: "Basic Tee",
        href: "#",
        imageSrc:
            "https://cdn.donmai.us/720x720/3b/9c/3b9c82dbf7567d4473c9a49a1198b703.webp",
        imageAlt: "Front of men's Basic Tee in black.",
        author: "$35",
        color: "Black",
        width: 576,
        height: 720,
    },
];
const test = [1, 2, 3];
</script>

<template>
    <div class="bg-white">
        <div class="board-wrapper">
            <div class="board masonry-board">
                <div
                    class="card image-card"
                    v-for="(image, index) in images"
                    :key="image.id"
                    :style="{
                        '--n': index + 1,
                        '--img-ratio': image.width / image.height,
                    }"
                >
                    <imageButton :image="image"> </imageButton>
                </div>
            </div>
        </div>
    </div>
</template>

<style></style>
