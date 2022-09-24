<script setup>
import AuthenticatedLayoutUser from '@/Layouts/AuthenticatedLayoutUser.vue';
import Nav from '@/Layouts/NavUser.vue';
import Sidebar from '@/Layouts/Sidebar.vue';

import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Home | Saint Rose of Lima" />

    <AuthenticatedLayoutUser>
        <!-- Navigation template -->
        <template #navigation>
            <Nav></Nav> 
        </template>

        <!-- Main template -->
        <template #main>
            <h1>Hello User</h1>
        </template>

    </AuthenticatedLayoutUser>
</template>
