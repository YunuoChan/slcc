<script setup>
    import AuthenticatedLayoutUser from '@/Layouts/AuthenticatedLayoutUser.vue';
    import Nav from '@/Layouts/NavUser.vue';
    import { ref } from 'vue';
    import { Head } from '@inertiajs/inertia-vue3';

    const date = ref(new Date());

    const props = defineProps({
        slots: Object,
        church: Object
    });



</script>
<script>
    export default {
        data() {
            return {
            chooseChurch: null,
            };
        },
    };
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
                                <input :id="'slotpicker-'+slot.id" type="radio" :value="slot.id" name="slotpick"/><label class="pl-2" :for="'slotpicker-'+slot.id">{{ slot.time_from }} - {{ slot.time_to}}</label>
                            </div>
                        </div>

                        <!-- CHURCH -->
                        <div>
                            <label class="block text-gray-600 text-sm font-bold mb-2 mt-3">Select Church</label>

                            <select v-model="chooseChurch">
                                <option disabled value="">Please select one</option>
                                <option  v-for="church in props.church" :key="church.id" :value="church.id">{{ church.name }}</option>
                            </select>
                            
                            <div v-for="church in props.church" :key="church.id">
                                <div v-if="chooseChurch === church.id">
                                    <div>
                                        <label class="block text-gray-600 text-sm font-bold mb-2 pt-3">Church Info:</label>
                                        <p class="pl-2">Address: {{ church.address }}</p>
                                        <p class="pl-2">Email: {{ church.email }}</p>
                                        <p class="pl-2">Contact: {{ church.contact_number }}</p>
                                    </div>
                                </div>
                            
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
