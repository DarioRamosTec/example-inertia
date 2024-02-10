<template>

    <AppLayout>
        <UserData ></UserData>
    </AppLayout>
    
</template>

<script>
import UserData from '@/Components/UserData.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

export default {
    components: {
        AppLayout, UserData
    }
}

</script>