<template>

    <AppLayout>
        <UserShow :user="user"></UserShow>
    </AppLayout>
    
</template>

<script>

import AppLayout from '@/Layouts/AppLayout.vue';
import UserShow from '@/Components/UserShow.vue';

export default {
    props: {
        user: {}
    },
    components: {
        AppLayout, UserShow
    }
}

</script>

