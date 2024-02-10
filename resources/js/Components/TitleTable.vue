<template>
    <div class="row">
        <div class="col-10">
            <p class="fs-2 pb-1 m-0">
                <slot></slot>
            </p>
            <div class="fs-6 m-0">
                <slot name="body"></slot>
            </div>
        </div>
        <div class="col-2 d-flex align-items-center justify-content-center">
            <AddButton :add="this.add" style="width: 80px;">
            </AddButton>
        </div>
    </div>
</template>

<script>

    import AddButton from '@/Components/AddButton.vue'

    export default {
        props: {
            add : Function,
        },
        components: {
            AddButton,
        }
    }

</script>