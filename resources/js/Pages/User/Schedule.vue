<script setup>
    import AuthenticatedLayoutUser from '@/Layouts/AuthenticatedLayoutUser.vue';
    import Nav from '@/Layouts/NavUser.vue';
    import { ref } from 'vue';
    import { Head } from '@inertiajs/inertia-vue3';

    const date = ref(new Date());

    const props = defineProps({
        'slots': Object
    });


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
            <div class="container h-full">
                <div class="w-full flex justify-center py-3">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-75" @submit.prevent>
                        <!-- DATE -->
                        <div>
                            <label class="block text-gray-600 text-sm font-bold mb-2" for="date">Select Date</label>
                            <div class="flex w-full">
                                <v-date-picker v-model="date" class="flex-grow">
                                    <template v-slot="{ inputValue, inputEvents }">
                                    <input
                                        id="date"
                                        class="bg-white text-gray-700 w-full py-2 px-3 appearance-none border rounded-l focus:outline-none"
                                        :class="{ 'border-red-600': errorMessage }"
                                        :value="inputValue"
                                        v-on="inputEvents"
                                    />
                                    </template>
                                </v-date-picker>
                                <button
                                    type="button"
                                    class="text-white font-bold py-2 px-4 rounded-r user-select-none focus:outline-none"
                                    :class="date ? 'bg-red-500' : 'bg-red-300'"
                                    :disabled="!date"
                                    @click="date = null"
                                >
                                    Clear
                                </button>
                            </div>
                      
                        </div>

                        <!-- TIME -->
                        <div class="pt-4">
                            <label class="block text-gray-600 text-sm font-bold mb-2">Select Time</label>
                            <div class="pl-3" v-for="slot in props.slots" :key="slot.id">
                                <input :id="'slotpicker-'+slot.id" type="radio" :value="slot.id" name="slotpick"/><label class="pl-2" :for="'slotpicker-'+slot.id">{{ slot.from }} - {{ slot.to}}</label>
                            </div>
                        </div>

                        <!-- EVENT -->
                        <div>
                         
                        </div>

                        
                    </form>
                </div>
            </div>
        </template>
    </AuthenticatedLayoutUser>
</template>
