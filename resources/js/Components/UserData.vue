<template>
    <div class="row mt-2">
        <div class="col-4" style="display: flex; align-items: center; flex-direction: column;">
            <img src="/vectors/user.svg" class="pt-5 w-75" />
        </div>

        <div class="col-8" style="text-align: left;">
            <form @submit.prevent="submit()">
                <fieldset style="text-align: left;">
                <legend>Store user's info</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" v-model="form.name" class="form-control" :class="{'is-invalid': usePage().props.errors.name}" placeholder="Write your name">
                    <div class="invalid-feedback" v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" v-model="form.last_name" class="form-control" :class="{'is-invalid': usePage().props.errors.last_name}" placeholder="Write your last name">
                    <div class="invalid-feedback" v-if="usePage().props.errors.last_name">
                        {{ usePage().props.errors.last_name }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" v-model="form.email" class="form-control" :class="{'is-invalid': usePage().props.errors.email}" placeholder="Write your email">
                    <div class="invalid-feedback" v-if="usePage().props.errors.email">
                        {{ usePage().props.errors.email }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="degree" class="form-label">Degree</label>
                    <input type="text" name="degree" id="degree" v-model="form.degree" class="form-control" :class="{'is-invalid': usePage().props.errors.degree}" placeholder="Write your degree">
                    <div class="invalid-feedback" v-if="usePage().props.errors.degree">
                        {{ usePage().props.errors.degree }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" id="department" v-model="form.department" :class="{'is-invalid': usePage().props.errors.department}" class="form-control" placeholder="Write your department">
                    <div class="invalid-feedback" v-if="usePage().props.errors.department">
                        {{ usePage().props.errors.department }}
                    </div>
                </div>
                </fieldset>
                <button type="submit" class="bg-dark btn btn-dark" :disabled="form.processing">Save</button>
            </form>
        </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue';
import { router, useForm } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';



const form = useForm({
    name: null,
    last_name: null,
    email: null,
    degree: null,
    department: null,
})

function submit() {
    form.post(route('users.store'))
}

</script>