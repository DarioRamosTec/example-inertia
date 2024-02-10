<template>
    <div class="row mt-2">
        <div class="col-4" style="display: flex; align-items: center; flex-direction: column;">
            <img src="/vectors/user.svg" class="pt-5 w-75" />
        </div>

        <div class="col-8" style="text-align: left;">
            <form @submit.prevent="" disabled>
                <fieldset style="text-align: left;">
                <legend>View user's info</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input disabled v-model="user.name" type="text" name="name" id="name" class="form-control" placeholder="Write your name">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input disabled v-model="user.last_name" type="text" name="last_name" id="last_name" class="form-control" placeholder="Write your last name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input disabled v-model="user.email" type="text" name="email" id="email" class="form-control" placeholder="Write your email">
                </div>
                <div class="mb-3">
                    <label for="degree" class="form-label">Degree</label>
                    <input disabled v-model="user.degree" type="text" name="degree" id="degree" class="form-control" placeholder="Write your degree">
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input disabled v-model="user.department" type="text" name="department" id="department" class="form-control" placeholder="Write your department">
                </div>
                </fieldset>
                <button @click="edit(user.id)" class="bg-dark btn btn-dark">Edit</button>
            </form>
        </div>
  </div>
</template>

<script>

import { router } from '@inertiajs/vue3';

export default {
    name:"user",
    props: {
        user: {}
    },
    methods: {
        edit(id) {
            router.visit(route('users.edit', {id: id}), {
                replace: true
            })
        }
    }
}

</script>