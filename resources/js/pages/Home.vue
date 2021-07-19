<template>
    <div class="text-white flex justify-around items-center h-120">
        <div class="card1 bg-block w-1/5 px-4 py-4 flex flex-col items-center rounded">
            <h1 class="font-Lato font-bold text-lg mb-4">MDT / CAD Pour Police GTA RP</h1>
            <div class="img border border-primary">
                <div class="img-central mb-2">
                    <img src="https://picsum.photos/1920/1080" alt="Lorem Picture">
                </div>
                <div class="img-secondaire flex justify-between max-w-full">
                    <img class="object-contain w-3/10" src="https://picsum.photos/1920/1080" alt="Lorem Picture">
                    <img class="object-contain w-3/10" src="https://picsum.photos/1920/1080" alt="Lorem Picture">
                    <img class="object-contain w-3/10" src="https://picsum.photos/1920/1080" alt="Lorem Picture">
                </div>
            </div>
        </div>
        <div class="button">
            <router-link to="/contrat">
                <button class="bg-gradient-to-r from-buttonColor1 flex justify-around items-center to-buttonColor2 w-72 phone:w-72 h-12 rounded-2xl">
                    <h1 class="font-Lato font-bold text-lg text-primary ">Me Proposer un Contrat</h1>
                    <i class="fas fa-arrow-circle-right fa-2x text-primary"></i>
                </button>
            </router-link>
        </div>
        <div class="card2 bg-block w-1/5 flex justify-center">
            <h1 class="font-Lato font-bold text-lg">World</h1>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            //
        }
    },
    created() {
    },
    methods: {}
}
</script>