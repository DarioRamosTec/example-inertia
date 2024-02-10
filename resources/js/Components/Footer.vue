<template>
    <div class="container mt-auto">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2024 Equipo 5, Corp</p>

            <Logo style="width: 64px; height: 64px;"></Logo>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item text-body-secondary">Universidad Tecnológica de Torreón</li>
            </ul>
        </footer>
        </div>
</template>

<script>
    import Logo from '@/Components/Logo.vue'

    export default {
        components: {
            Logo,
        }
    }
</script>