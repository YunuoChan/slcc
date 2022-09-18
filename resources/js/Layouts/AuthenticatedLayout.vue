<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <!-- PAGE CONTAINER -->
        <div class="h-screen min-w-full">

           
            <div class="flex flex-row justify-start">
               <div class="order-1 flex-1 bg-gray-50">
                    <!-- HEADER NAVIGATION -->
                    <nav class="bg-gray-100">
                        <slot name="navigation"></slot>
                    </nav>

                    <!-- PAGE CONTENT -->
                    <main>
                        <slot name="main"/>
                    </main>
               </div>

                 <!-- SIDEBAR -->
                <aside class="h-screen px-8 pb-4 bg-white flex justify-between flex-col w-80 p-4 ">
                    <slot name="sidebar"></slot>
                </aside>
            </div>
           
        </div>
    </div>
</template>
