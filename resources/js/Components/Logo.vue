<template>

    <Link :href="route('welcome')">
        <svg style="width: 64px; height: 64px;" width="95" height="89" viewBox="0 0 95 89" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M82.4861 25.7643L63.5693 4.10666L13.0325 17.6479L7.47892 45.8624L56.446 78.5957L82.4861 25.7643Z" stroke="black" stroke-width="2.5"/>
            <path d="M63.5693 4.10664L59.6771 32.1379M59.6771 32.1379L82.8176 25.9375L56.3805 78.3513L59.6771 32.1379ZM59.6771 32.1379L38.0349 10.9485M59.6771 32.1379L29.621 40.1914" stroke="black" stroke-width="1.5"/>
            <path d="M13.2985 17.5766L30.685 39.9064M30.685 39.9064L7.54445 46.1068L56.3805 78.3513L30.685 39.9064ZM30.685 39.9064L38.8329 10.7347M30.685 39.9064L60.741 31.8529" stroke="black" stroke-width="1.5"/>
        </svg>
    </Link>

</template>

<script>

    import { Link } from '@inertiajs/vue3';

    export default {
        components: {
            Link,
        }
    }

</script>