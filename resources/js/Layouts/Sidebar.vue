<script setup>
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="" style="width: 250px !important;">
        <div class="flex flex-1 justify-center h-14 mb-10 -mt-2">
           <img src="https://imgs.search.brave.com/m0FZ-us6UcWXGAsVHpMBqenFczqfuIjdZDUAtZnkAEY/rs:fit:668:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5l/Q3hBU2FVNS1fMks5/V3BHSHBBZy13SGFG/USZwaWQ9QXBp" alt="">
        </div>

        <div class="">
            <div class="flex items-center gap-2 mb-7">
                <div>
                    <img class="w-11 h-11 rounded-full object-cover" src="https://imgs.search.brave.com/AmStzCg4ZRXJR9By8qkYOlLvm1nSTXChtW7ZcxtGAQc/rs:fit:844:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5a/amVYek0wdjdJLVd4/NlViT3NwUjFnSGFF/SyZwaWQ9QXBp" alt="">
                </div>

                <div>
                    <span class=" text-sm font-bold">Edyy</span>
                </div>
            </div>

            <div>
                <ul class="flex flex-col gap-3">

                    <Link :href="route('dashboard')">
                        <li class="sidebar-text"  :class="route().current() == 'dashboard' ? 'text-blue-500' : 'text-black'">
                            <span class="text-base font-semibold">Dashboard</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                            </svg>
                        </li>
                    </Link>

                    <li class="sidebar-text">
                        <span class="text-base font-semibold">Calendar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                    </li>

                    <Link :href="route('appointments')">
                        <li class="sidebar-text"  :class="route().current() == 'appointments' ? 'text-blue-500' : 'text-black'">
                            <span class="text-base font-semibold">Appointments</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </li>
                    </Link>

                    <Link :href="route('accounts')">
                        <li class="sidebar-text" :class="route().current() == 'accounts' ? 'text-blue-500' : 'text-black'">
                            <span class="text-base font-semibold">Accounts</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </li>
                    </Link>

                    <Link :href="route('logout')" method="post" as="button">
                        <li class="sidebar-text">
                            <span class="text-base font-semibold">Sign out</span>
                        </li>
                    </Link>
                </ul>
            </div>
        </div>
    </div>
</template>
