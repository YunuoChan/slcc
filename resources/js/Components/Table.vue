<script setup>

const props = defineProps({
    columns: Array,
});
</script>

<template>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="min-w-full sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full border">
                        <thead class="bg-white border-b">
                            <tr>
                                <th v-for="(column, index) in props.columns" :key="`${index}`" scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-r" :class="column == '#' ? 'w-2' : ''">
                                    {{ column }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <slot name="table"/>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.table-width {
    width: 300px;
}
</style>