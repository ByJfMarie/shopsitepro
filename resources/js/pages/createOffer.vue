<template lang="fr">
    <div class="pt-14 w-full flex flex-col items-center text-white font-Lato">
        <h1 class="text-2xl pb-14">Interface Administrateur</h1>
        <div class="card w-4/6 bg-block flex flex-col items-center shadow-lg px-4 py-4 rounded-md">
            <h1 class="text-xl mb-4">Créer une Nouvelle Offre :</h1>
            <span class="h-px w-full mb-8 bg-gradient-to-r from-buttonColor1 to-buttonColor2 shadow-lg"></span>
            <div class="infos flex flex-col xl:flex-row justify-around items-center w-full h-full">
                <div class="right">
                    <div class="title mb-4">
                        <input id="text" type="text" placeholder="Titre de l'Ofrre" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="title" required>
                    </div>
                    <div class="description mb-4">
                        <input id="text" type="text" placeholder="Description de l'offre" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="description" required>
                    </div>
                    <div class="icone mb-4">
                        <input id="text" type="text" placeholder="Icone FontAwesome " class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="icone" required>
                    </div>
                    <div class="price mb-4">
                        <input id="text" type="text" placeholder="Prix 'A partir de ...'" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="price" required>
                    </div>
                </div>
                <span class="h-px w-3/4 xl:w-px xl:h-44 mb-4 xl:mb-0 bg-primary"></span>
                <div class="left flex flex-col items-center">
                    <div class="add flex mb-4">
                        <input id="text" type="text" placeholder="Ajouter un Service" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base mr-4" v-model="fill">
                        <button @click="addService"><i class="fas fa-plus fa-2x text-tailwind"></i></button>
                    </div>
                    <div class="liste bg-primary rounded px-4 py-2 w-72 phone:w-96 h-40">
                        <ul class="flex flex-wrap justify-between">
                            <li v-for="service in services" class="font-Lato text-base" @click="removeService(service)" >{{service}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button @click="addNewOffer" class="bg-gradient-to-r from-buttonColor1 flex justify-around items-center to-buttonColor2 w-44 h-10 rounded-sm shadow-xl mt-8">
                <h1 class="font-Lato font-bold text-lg text-block ">Créer l'Offre</h1>
                <i class="fas fa-angle-right fa-2x text-block"></i>
            </button>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            fill: '',
            services: [],
            title: null,
            description: null,
            icone: null,
            price: null
        }
    },
    methods: {
        addService() {
            this.services.push(this.fill);
            this.fill = '';
            console.log(this.services);
        },
        removeService(index) {
            this.services.splice(index, 1);
            console.log(this.services);
        },
        addNewOffer() {
            var newOffer = new Object;
            newOffer.title = this.title;
            newOffer.description = this.description;
            newOffer.price = this.price;
            newOffer.icone = this.icone;
            newOffer.description_inline = [];

            for (var i = 0; i < this.services.length; i++) {
                newOffer.description_inline[i] = this.services[i];
            }

            this.$axios.post('/api/offer', newOffer).then(response => {
                alert(response.data.message);
            });

            this.title = null;
            this.description = null;
            this.price = null;
            this.services = [];
            this.fill = '';
            this.icone = null;
        }

    },
}
</script>
<style lang="scss">
    
</style>