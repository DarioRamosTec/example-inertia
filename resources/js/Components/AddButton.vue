<template>
   <button type="button" class="btn">
    <img @click="add()" class="w-100" src="/vectors/add.svg">
   </button>
</template>

<script>

    export default {
        props: {
            add : Function
        }
    }

</script>