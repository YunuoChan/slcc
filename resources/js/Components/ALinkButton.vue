<script setup>
import { computed } from 'vue';

const props = defineProps(['href']);

</script>

<template>

    <a class="btn btn-outline-light btn-lg m-2" :href="href"  target="_blank" role="button">
        <slot />
    </a>
</template>
