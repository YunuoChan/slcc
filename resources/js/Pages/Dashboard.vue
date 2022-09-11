<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Nav from '@/Layouts/Nav.vue';
import Main from '@/Layouts/Main.vue';
import Sidebar from '@/Layouts/Admin/Sidebar.vue';

import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- Navigation template -->
        <template #navigation>
            <Nav></Nav> 
        </template>

        <!-- Main template -->
        <template #main>
            <Main></Main>
        </template>

        <!-- Sidebar template -->
        <template #sidebar>
           <Sidebar></Sidebar> 
        </template>
    </AuthenticatedLayout>
</template>
