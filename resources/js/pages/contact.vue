<template lang="fr">
    
    <div class="text-white flex items-center justify-center pt-14">
        <div class="card w-4/6 bg-block flex flex-col items-center shadow-lg px-4 py-4 rounded-md">
            <h1 class="text-xl mb-4">Prise de Contact - Envoyer un Mail :</h1>
            <span class="h-px w-full mb-8 bg-gradient-to-r from-buttonColor1 to-buttonColor2 shadow-lg"></span>
            <div class="infos flex flex-col xl:flex-row justify-around items-center w-full h-full">
                <div class="right">
                    <div class="title mb-4">
                        <input id="text" type="text" placeholder="Nom + Prénom" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="name" required>
                    </div>
                    <div class="description mb-4">
                        <input id="text" type="text" placeholder="Votre Email" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="email" required>
                    </div>
                    <div class="icone mb-4">
                        <input id="text" type="text" placeholder="Numéro de téléphone" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="telephone" required>
                    </div>
                </div>
                <span class="h-px w-3/4 xl:w-px xl:h-44 mb-4 xl:mb-0 bg-primary"></span>
                <div class="left flex flex-col items-center">
                    <div class="add flex mb-4">
                        <select name="type_demande" id="type_demande" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="type_demande">
                            <option value="">-- Choisir le type de demande --</option>
                            <option value="Contrat Freelance">Contrat Freelance</option>
                            <option value="Achat d'Application Web">Achat d'Application Web</option>
                            <option value="Demande personnalisée">Demande personnalisée / autre</option>
                        </select>
                    </div>
                    <textarea name="message" id="message" cols="30" rows="10" class="bg-primary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base h-44 resize-none"></textarea>
                </div>
            </div>
            <button @click="addNewOffer" class="bg-gradient-to-r from-buttonColor1 flex justify-around items-center to-buttonColor2 w-44 h-10 rounded-sm shadow-xl mt-8">
                <h1 class="font-Lato font-bold text-lg text-block ">Envoyer</h1>
                <i class="fas fa-paper-plane fa-2x text-block"></i>
            </button>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            type_demande: "",
        }
    },
    methods: {
        // Envoyer un mail
        envoyerMail() {
            // Crée l'objet qui contient les infos du mail
            var newMail = new Object;
            newMail.nom = "Jean-François Marie";
            newMail.email = "jf.marie@outlook.fr";
            newMail.message = "Je suis un nouveau message";

            this.$axios.post('/api/contact', newMail)
                .then(response => {
                    console.log(response);
                })

        }
    }
}
</script>
<style lang="scss">
    
</style>