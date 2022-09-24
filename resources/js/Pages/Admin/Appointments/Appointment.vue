<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Table from '@/Components/Table.vue';
import Nav from '@/Layouts/Nav.vue';
import Sidebar from '@/Layouts/Sidebar.vue';

import { Head, useForm } from '@inertiajs/inertia-vue3';


const props = defineProps({
    'appointments': Object
});

function redirectTo(url) {
    window.location = url;
}

const form = useForm({
    _method: 'PUT',
    id: '',
    name: '',
    email: ''
});


function sendEmail(id) {
    console.log('dito ka');
    form.id = id;
    form.post(route('sendEmail'));
}
</script>

<template>
    <Head title="Appointments" />

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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h1 class="text-lg font-bold">
                        Appointment
                    </h1>
                </div>
                <div class="table-container">
                    <h1 class=" font-semibold ml-7 mb-4">Table Design</h1>
                    <!-- DYNAMIC AND REUSABLE TABLE COMPONENT -->
                    <Table :columns="['#', 'Customer Name','Scheduled Date', 'Scheduled Time', 'Status', 'Action']">
                        <template #table>
                            <tr v-for="appointment in props.appointments" :key="appointment.id" class="bg-white border-b hover:bg-slate-100 cursor-pointer">
                                <td class="px-6 py-4s whitespace-nowrap text-sm font-medium text-gray-900 border-r w-2">
                                    {{ appointment.id }}
                                </td>

                                <td class="text-sms text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ appointment.name }}
                                </td>

                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ appointment.scheduled_date }}
                                </td>

                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ appointment.scheduled_time }}
                                </td>

                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ appointment.status }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    <button @click="sendEmail(appointment.id)" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Send Confirmation</button>
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