<template>

    <AppLayout>
        <UserEdit :user="user"></UserEdit>
    </AppLayout>
    
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import UserEdit from '@/Components/UserEdit.vue';

export default {
    props: {
        user: {}
    },
    components: {
        AppLayout, UserEdit
    }
}

</script>

