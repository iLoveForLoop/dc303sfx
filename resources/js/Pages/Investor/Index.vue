<script setup>

import { Head, Link, router } from '@inertiajs/vue3';
import PageLayout from '../PageLayout.vue';
import InvestorCard from '../../Components/InvestorCard.vue'


const props = defineProps({
    investors: {
        type: Object,
        required: true

    }
})

console.log(props.investors);
</script>

<template>

    <Head title="Investors" />

    <PageLayout>
        <div class="w-full flex justify-end items-center my-3 pe-3">
            <button @click="router.get(route('create'))" class="bg-green-700 px-3 py-2 rounded text-white">Add New Products</button>
        </div>

        <div>
            <nav class="text-white">
        <Link v-if="investors.first_page_url" :href="investors.first_page_url">&lt;</Link>
        <Link v-if="investors.prev_page_url" :href="investors.prev_page_url">prev</Link>
        Page {{ investors.current_page }} of {{ investors.last_page }}
        <Link v-if="investors.next_page_url" :href="investors.next_page_url">next</Link>
        <Link v-if="investors.last_page_url" :href="investors.last_page_url">&gt;</Link>
</nav>

            </div>

        <div class="grid grid-cols-3 gap-2 md:grid-cols-3" v-if="investors">
            <div v-for="investor in investors.data" :key="investor.id">
                <!-- <div >{{ investor.first_name }} {{ investor.last_name }}</div> -->
                <InvestorCard :investor="investor"/>
            </div>

        </div>

        <div v-else>No investors found</div>
    </PageLayout>

</template>
