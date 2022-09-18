<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Table from '@/Components/Table.vue';
import Nav from '@/Layouts/Nav.vue';
import Sidebar from '@/Layouts/Sidebar.vue';

import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({
    'users': Object
});

</script>

<template>
    <Head title="Accounts" />

    <AuthenticatedLayout>
        <!-- Navigation template -->
        <template #navigation>
            <Nav></Nav> 
        </template>

        <!-- Main template -->
        <template #main>
             <div class="px-10">
                <div class="flex gap-2 my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <h1 class="text-lg font-bold">
                        Accounts
                    </h1>
                </div>
                <div class="table-container">
                    <h1 class=" font-semibold ml-7 mb-4">Table Design</h1>
                    <!-- DYNAMIC AND REUSABLE TABLE COMPONENT -->
                    <Table :columns="['#', 'Email Address', 'Full Name', 'Date Joined']">
                        <template #table>
                            <tr v-for="user in props.users" :key="user.id" class="bg-white border-b hover:bg-slate-100 cursor-pointer">
                                <td class="px-6 py-4s whitespace-nowrap text-sm font-medium text-gray-900 border-r w-2">
                                    {{ user.id }}
                                </td>
                                <td class="text-sms text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ user.name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ user.email }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ user.date_joined }}
                                </td>
                            </tr>
                        </template>
                    </Table>
                </div>
             </div>
        </template>

        <!-- Sidebar template -->
        <template #sidebar>
           <Sidebar></Sidebar> 
        </template>
    </AuthenticatedLayout>
</template>