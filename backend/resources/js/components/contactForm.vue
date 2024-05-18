<template>
    <div>
        <form @submit.prevent="submitForm" class="max-w-lg mx-auto p-4 bg-white rounded shadow">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" v-model="form.name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" v-model="form.email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message:</label>
                <textarea id="message" v-model="form.message" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Submit</button>
        </form>
        <div v-if="successMessage" class="mt-4 p-4 bg-green-100 text-green-700 rounded">
            {{ successMessage }}
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                message: ''
            },
            successMessage: ''
        };
    },
    methods: {
        submitForm() {
            axios.post('/contact-form', this.form)
                .then(response => {
                    this.successMessage = response.data.message;
                    this.form = {
                        name: '',
                        email: '',
                        message: ''
                    };
                })
                .catch(error => {
                    console.error('There was an error submitting the contact form!', error);
                });
        }
    }
};
</script>
