<template>
    <div class="text-white flex flex-col xl:flex-row justify-around items-center xl:pt-44">
        <div v-if="this.card1_data" class="card1 bg-block w-72 phone:w-96 px-4 py-4 flex flex-col items-center rounded shadow-2xl mb-20 xl:mb-0">
            <h1 class="font-Lato font-bold text-lg mb-4">{{card1_data.title}}</h1>
            <div class="img pb-4 border-b border-primary w-full flex justify-center">
                <div class="img-central mb-2">
                    <i class="fas fa-4x text-tertiary" v-bind:class="card1_data.icone"></i>
                </div>
            </div>
            <div class="options flex items-center w-full px-4 border-b border-primary py-2" v-for="service in card1_data.description_inline">
                <i class="fas fa-plus text-tailwind mr-10"></i>
                <h2>{{service}}</h2>
            </div>
            <button class="bg-gradient-to-r from-buttonColor1 flex justify-around items-center to-buttonColor2 w-4/5 h-10 rounded-sm shadow-xl mt-8">
                    <h1 class="font-Lato font-bold text-lg text-block ">Découvrir l'Offre</h1>
                    <i class="fas fa-angle-right fa-2x text-block"></i>
            </button>
        </div>

        <div class="button order-first xl:order-none mb-20 xl:mb-0 mt-20 xl:mt-0">
            <router-link to="/contrat">
                <button class="bg-gradient-to-r from-buttonColor1 flex justify-around items-center to-buttonColor2 w-72 phone:w-72 h-12 rounded-2xl shadow-xl">
                    <h1 class="font-Lato font-bold text-lg text-primary ">Me Proposer un Contrat</h1>
                    <i class="fas fa-arrow-circle-right fa-2x text-primary"></i>
                </button>
            </router-link>
        </div>

        <div v-if="this.card2_data" class="card2 bg-block w-72 phone:w-96 px-4 py-4 flex flex-col items-center rounded shadow-2xl mb-20 xl:mb-0">
            <h1 class="font-Lato font-bold text-lg mb-4">{{card2_data.title}}</h1>
            <div class="img pb-4 border-b border-primary w-full flex justify-center">
                <div class="img-central mb-2">
                    <i class="fas fa-4x text-tertiary" v-bind:class="card2_data.icone"></i>
                </div>
            </div>
            <div v-for="service in card2_data.description_inline" class="options flex items-center w-full px-4 border-b border-primary py-2">
                <i class="fas fa-plus text-tailwind mr-10"></i>
                <h2>{{service}}</h2>
            </div>
            <button class="bg-gradient-to-r from-buttonColor1 flex justify-around items-center to-buttonColor2 w-4/5 h-10 rounded-sm shadow-xl mt-8">
                    <h1 class="font-Lato font-bold text-lg text-block ">Découvrir l'Offre</h1>
                    <i class="fas fa-angle-right fa-2x text-block"></i>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            test: "fa-desktop",
            card1_data: null,
            card2_data: null,
        }
    },
    created() {
        this.$axios.get("/api/offer/1").then(response => {
            this.card1_data = response.data;
            this.card1_data.description_inline = JSON.parse(this.card1_data.description_inline);
        });

        this.$axios.get("/api/offer/2").then(response => {
            this.card2_data = response.data;
            this.card2_data.description_inline = JSON.parse(this.card2_data.description_inline);
        });
    },
    methods: {}
}
</script>