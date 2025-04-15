<script setup>
defineProps({
    investor: Object
})

</script>

<template>
    <div class="bg-green-100 border border-green-300 p-8 rounded-lg max-w-full h-[200px] mx-auto">
        <p>Name: {{ investor.last_name }}, {{ investor.first_name }}</p>
        <p>Phone: {{ investor.phone }}</p>
        <p>Address: {{ investor.address }}</p>
        <p>Investment Type: {{ investor.investment_type }}</p>
    </div>
</template>

<style></style>
