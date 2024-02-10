<template>
    
    <TitleTable :add="this.add">
       <template #default>
            <slot name="title"></slot>
       </template>
       <template v-slot:body>            
            <slot name="body"></slot>
       </template> 
    </TitleTable>

    <div class="table-responsive">
        <table class="table table-striped custom-table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Department</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody v-if="users.length > 0">
                <tr v-for="(user, key) in users" :key="key" scope="row">
                    <td class="h-100">
                        <Link :href='route("users.show", {id: user.id})' class="text-decoration-none">
                            {{ user.name }} {{ user.last_name }}
                        </Link>
                    </td>
                    <td>
                        {{ user.email }}
                    </td>
                    <td>
                        {{ user.degree }}
                    </td>
                    <td>
                        {{ user.department }}
                    </td>
                    <td>
                        <button type="button" class="btn pt-0 m-0 btn-lg">
                            <Link :href='route("users.edit", {id: user.id})'>
                                <img src="/vectors/edit.svg" style="width: 24px; padding-top: 5px;" />
                            </Link>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn p-0 m-0 me-3 btn-lg" @click="destroy(user.id)">
                            <img src="/vectors/destroy.svg" style="width: 18px;" />
                        </button>
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <tr class="w-100">
                    <td v-if="loading">Loading...</td>
                    <td v-else>There is nothing!</td>
                </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    import TitleTable from '@/Components/TitleTable.vue';
    import { Link } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    export default {
        name:"users",

        data(){
            return {
                loading: false,
            }
        },
        props: {
            add : Function,
            users: Array,
        },
        components: {
            TitleTable, Link,
        },
        methods: {
            destroy(id) {
                router.delete(route("users.destroy", {id: id}))
            }
        }
    }
</script>