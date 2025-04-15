<script setup>
import { useForm } from '@inertiajs/vue3';
import PageLayout from '../PageLayout.vue';

const form = useForm({
    first_name: '',
    last_name: '',
    address: '',
    phone: '',
    investment_type: ''

})

const submit = () => {
    form.post(route('investor.store'));
    form.first_name = ''
    form.last_name = ''
    form.address = ''
    form.phone = ''
    form.investment_type = ''
}

</script>

<template>
    <PageLayout>
        <div class="max-w-2xl mx-auto p-6 bg-green-100 border border-green-300 mt-10 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Add Investor</h1>

            <form @submit.prevent="submit" class="space-y-5">
                <!-- First Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                    <input v-model="form.first_name" type="text"
                        class="mt-1 block w-full border border-gray-300 rounded p-2" />
                    <div v-if="form.errors.first_name" class="text-red-500 text-sm mt-1">
                        {{ form.errors.first_name }}
                    </div>
                </div>

                <!-- Last Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input v-model="form.last_name" type="text"
                        class="mt-1 block w-full border border-gray-300 rounded p-2" />
                    <div v-if="form.errors.last_name" class="text-red-500 text-sm mt-1">
                        {{ form.errors.last_name }}
                    </div>
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Phone</label>
                    <input v-model="form.phone" type="text"
                        class="mt-1 block w-full border border-gray-300 rounded p-2" />
                    <div v-if="form.errors.phone" class="text-red-500 text-sm mt-1">
                        {{ form.errors.phone }}
                    </div>
                </div>

                <!-- Address -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input v-model="form.address" type="text"
                        class="mt-1 block w-full border border-gray-300 rounded p-2" />
                    <div v-if="form.errors.address" class="text-red-500 text-sm mt-1">
                        {{ form.errors.address }}
                    </div>
                </div>

                <!-- Investment Type (Combo Box) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Investment Type</label>
                    <select v-model="form.investment_type" class="mt-1 block w-full border border-gray-300 rounded p-2">
                        <option value="" disabled>Select investment type</option>
                        <option value="micro">Micro</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="benefactor">Benefactor</option>
                    </select>
                    <div v-if="form.errors.investment_type" class="text-red-500 text-sm mt-1">
                        {{ form.errors.investment_type }}
                    </div>
                </div>

                <!-- Submit -->
                <div>
                    <button type="submit" :disabled="form.processing"
                        class="bg-green-900 text-white px-4 py-2 rounded hover:bg-green-700 disabled:opacity-50">
                        Create Investor
                    </button>
                </div>
            </form>
        </div>
    </PageLayout>
</template>

<style></style>
