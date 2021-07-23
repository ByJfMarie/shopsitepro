<template>
    <div v-bind:class="{ hidden: loading_isHidden }" class="h-screen w-full flex items-center justify-center">

    <orbit-spinner
          :animation-duration="1500"
          :size="120"
          :color="'#40C2D0'"

     />
    </div>
    <div v-bind:class="{ hidden: page_isHidden }">

        <nav class="navbar navbar-expand-lg navbar-light w-full py-4 px-4 bg-secondary font-Lato">
            <div class="collapse navbar-collapse w-full">
                <div class="navbar-nav flex justify-between w-full text-white items-center">
                    <div class="site-return">
                      <a href="http://jeanfrancois-marie.fr" class="flex group hover:transform hover:scale-150 font-Lato text-sm sm:text-xl">
                        <p class="group-hover:text-laravel group-hover font-bold mr-1">Jean-François</p>
                        <p class="group-hover:text-vuejs font-light">Marie</p>
                      </a>
                    </div>
                    <div class="menu xl:block hidden w-3/5 lg:w-1/2">

                    <div class="menu flex justify-around w-full text-base uppercase">

                      <router-link to="/" class="nav-item nav-link hover:text-tailwind">Home</router-link>
                      <router-link to="/web" class="nav-item nav-link hover:text-tailwind">Applications Web</router-link>
                      <router-link to="/contrat" class="nav-item nav-link hover:text-tailwind">Contrat Freelance</router-link>
                      <router-link to="/contact" class="nav-item nav-link hover:text-tailwind">Demande Personnalisé</router-link>
                    </div>
                    </div>
                    <div class="menu xl:hidden block sm:w-3/5 w-2/5">

                    <div class="menu flex justify-around w-full sm:text-base uppercase text-sm">

                      <router-link to="/" class="nav-item nav-link">Home</router-link>
                      <!-- <router-link to="/web" class="nav-item nav-link">Applications Web</router-link> -->
                      <!-- <router-link to="/contrat" class="nav-item nav-link">Contrat Freelance</router-link> -->
                      <!-- <router-link to="/demande" class="nav-item nav-link">Demande Personnalisé</router-link> -->
                    </div>
                    </div>
                    <div class="user-option sm:text-xl text-base">
                      <!-- <router-link to="/login" class="nav-item nav-link">login</router-link> -->
                      <!-- <router-link to="/register" class="nav-item nav-link">Register </router-link> -->
                      <router-link to="/dashboard"><i class="fas fa-shopping-cart mr-8 hover:text-laravel cursor-pointer"></i></router-link>
                      <router-link to="/dashboard"><i class="fas fa-user hover:text-vuejs cursor-pointer"></i></router-link>
                    </div>
                    
                </div>
            </div>
        </nav>
        <router-view/>
    </div>
</template>

<script>

import {OrbitSpinner} from 'epic-spinners'

export default {
    name: "App",
    data() {
        return {
            isLoggedIn: false,
            loading_isHidden: false,
            page_isHidden: true,
        }
    },
    components: {
        OrbitSpinner
    },
    beforeMount() {
        setTimeout(() => {
            this.loading_isHidden = true;
            this.page_isHidden = false;
        }, 1000);
    },
    created() {
        if (window.Laravel.isLoggedin) {
            this.isLoggedIn = true
        }
    },
    methods: {
        logout(e) {
            console.log('ss')
            e.preventDefault()
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.post('/api/logout')
                    .then(response => {
                        if (response.data.success) {
                            window.location.href = "/"
                        } else {
                            console.log(response)
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            })
        }
        
    },
}
</script>