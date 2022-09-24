<script setup>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Nav from '@/Layouts/Header.vue';
import FooterNav from '@/Layouts/Footer.vue';
import Promotional from '@/Layouts/Promotional.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>
<template>
    <Head title="Home"/>
    <Nav></Nav>
    <Promotional></Promotional>
    <FooterNav></FooterNav>


</template>
