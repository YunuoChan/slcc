<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Nav from '@/Layouts/Nav.vue';
import Sidebar from '@/Layouts/Sidebar.vue';

import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Home | Saint Rose of Lima" />

    <AuthenticatedLayout>
        <!-- Navigation template -->
        <template #navigation>
            <Nav></Nav> 
        </template>

        <!-- Main template -->
        <template #main>
            <h1>Hello User</h1>
        </template>

        <!-- Sidebar template -->
        <template #sidebar>
           <Sidebar></Sidebar> 
        </template>
    </AuthenticatedLayout>
</template>
