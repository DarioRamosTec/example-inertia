<template>
    <div class="d-flex flex-column min-vh-100">
        <Header></Header>
        <div class="container">
            <slot></slot>
        </div> 
        <Footer></Footer>
    </div>
</template>

<script>

import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

export default {
    components: {
        Header,
        Footer,
    }
}

</script>