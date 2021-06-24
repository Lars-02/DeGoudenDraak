<template>
    <div class="grid grid-cols-2 m-8">
        <div class="border-r-4 border-blue-600 h-3/4 max-h-screen">
            <div class="border-2 border-blue-600 rounded-md overflow-y-scroll h-full mx-2 p-4">
                <div v-for="(servings, category) in items">
                    <h2 class="text-center">{{ category }}</h2>
                    <div class="flex flex-col">
                        <div v-for="serving in servings" class="grid grid-cols-6 w-full text-lg m-1">
                            <div>{{ serving.number + serving.version }}</div>
                            <div class="col-span-3">{{ serving.name }}</div>
                            <div>€ {{ serving.price }}</div>
                            <button
                                v-on:click="orderd.push(serving)"
                                class="text-xs sm:text-sm md:text-base lg:text-lg py-1 px-2 sm:px-3 md:px-4 xl:px-5 bg-gray-400 hover:bg-gray-600 text-white font-bold rounded focus:outline-none">
                                toevoegen
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col h-3/4 max-h-screen">
            <div class="border-2 border-blue-600 rounded-md h-full mx-2 p-4">
                <div v-for="order in orderd" class="grid grid-cols-6 w-full text-lg m-1">
                    <div>{{ order.number + order.version }}</div>
                    <div class="col-span-3">{{ order.name }}</div>
                    <div>€ {{ order.price }}</div>
                    <button
                        v-on:click="orderd.push(serving)"
                        class="text-xs sm:text-sm md:text-base lg:text-lg py-1 px-2 sm:px-3 md:px-4 xl:px-5 bg-gray-400 hover:bg-gray-600 text-white font-bold rounded focus:outline-none">
                        toevoegen
                    </button>
                </div>
            </div>
            <div class="border-2 border-blue-600 rounded-md mx-2">
                Total
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    props: ['items'],
    data() {
        return {
            orderd: []
        }
    },
}
</script>
