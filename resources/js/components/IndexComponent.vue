<template>
    <div class="w-25">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr>
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td><a href="#" @click.prevent="changeEditPersonId(person.id)" class="btn btn-success">Edit</a></td>
                </tr>
                <tr :class="isEdit(person.id) ? '' : 'd-none'">
                    <th scope="row">{{ person.id }}</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="number" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td><a href="#"  class="btn btn-success">Update</a></td>
                </tr>
            </template>

            </tbody>
        </table>
    </div>
</template>

<script>

import axios from "axios";

export default {
    name: "IndexComponent",

    data() {
        return {
            people: null,
            editPersonId: null,
        }
    },

    mounted() {
        this.getPeople();
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data;
                });
        },
        changeEditPersonId(id) {
            this.editPersonId = id
        },
        isEdit(id) {
            return this.editPersonId === id;
        }
    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
