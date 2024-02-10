<template>

    <AppLayout>
        <DataTable :add="this.toCreate" :users="this.users">
            <template #title>
                User's table
            </template>
            <template #body>
                Here is all user's table.
            </template>
        </DataTable>
    </AppLayout>
    
</template>

<script>

import AppLayout from '@/Layouts/AppLayout.vue';
import DataTable from '@/Components/DataTable.vue';
import { router } from '@inertiajs/vue3';

export default {
    components: {
        AppLayout, DataTable
    },
    methods: {
        toCreate() {
            router.visit(route('users.create'), {
                replace: true
            })
        }
    },
    props: {
        users: Array
    }
}

</script>

