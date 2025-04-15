<script setup>
defineProps({
    investor: Object
})

</script>

<template>
    <div class="bg-white px-2 py-4 flex flex-col w-full">
        <p>Name: {{investor.last_name}} {{investor.first_name}}</p>
        <p>Phone: {{ investor.phone }}</p>
        <p>Address: {{ investor.address }}</p>
        <p>Investment Type: {{ investor.investment_type }}</p>
    </div>
</template>

<style>

</style>