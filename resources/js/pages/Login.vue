<template>


    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="alert alert-danger" role="alert" v-if="error !== null">
                    {{ error }}
                </div>

                <div class="card-containers h-full flex lg:flex-row flex-col items-center justify-around text-white mt-8 xl:mt-36 lg:mt-24 md:mt-16">
                    <div class="flex flex-col items-center mb-16 lg:mb-0">
                        <div class="mb-16 font-Lato font-bold text-xl">Se Connecter à Son Compte</div>
                        <div class="card-body">
                            <form class="flex flex-col items-center">
                                <div class="mb-6">
                                        <input id="email" type="email" placeholder="Email" class="bg-tertiary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="l_email" required
                                               autofocus autocomplete="off">
                                </div>

                                <div class="form-group row mb-6">
                                        <input id="password" type="password" placeholder="Mot De Passe" class="bg-tertiary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="l_password"
                                               required autocomplete="off">

                                </div>

                                 <div class="mb-12 w-72 phone:w-96 flex justify-between text-tertiary">
                                    <div class="checkbox">
                                        <input type="checkbox" class="mr-2" name="remember_me" id="remember_me" v-model="remember_me">
                                        <label for="remember_me">Se Souvenir de Moi</label>
                                    </div>
                                    <div class="forgot">
                                        <a href="">Mot de Passe Perdu ?</a>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" @click="handleSubmit" class="bg-gradient-to-r from-vuejs to-laravel w-72 phone:w-96 h-12 rounded font-Lato font-bold text-lg">
                                            Se Connecter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    </div>
                    <span class="inline-block border-t-2 lg:border-l-2 lg:border-t-0 border-tertiary w-72 mb-16 lg:w-0 lg:mb-0 lg:h-100"></span>
                    <div class="flex flex-col items-center">
                    <div class="mb-16 font-Lato font-bold text-xl">Pas Encore de Compte</div>
                    <div class="card-body">
                        <form class="flex flex-col items-center">
                            <div class="form-group row mb-6">
                               
                                    <input id="name" type="text" placeholder="Nom" class="bg-tertiary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="r_name" required
                                           autofocus autocomplete="off">
                       
                            </div>

                            <div class="form-group row mb-6">
                              
                                    <input id="email" type="email" placeholder="Email" class="bg-tertiary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="r_email" required
                                           autofocus autocomplete="off">
                               
                            </div>

                            <div class="form-group row mb-12">
                                
                                    <input id="password" type="password" placeholder="Mot de Passe" class="bg-tertiary rounded px-4 py-2 w-72 phone:w-96 font-Lato text-base" v-model="r_password"
                                           required autocomplete="off">
                           
                            </div>

                           
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="bg-gradient-to-r from-vuejs to-laravel w-72 phone:w-96 h-12 rounded font-Lato font-bold text-lg" @click="handleSubmit">
                                        S'Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>

                
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

    // .border-gradient-purple {
        // border-image-source: linear-gradient(to bottom left, #8B539C, #DD6D2D);
    // }  
</style>

<script>
export default {
    data() {
        return {
            l_email: "",
            l_password: "",
            remember_me: "",
            error: null,
            r_name: "",
            r_email: "",
            r_password: "",
        }
    },
    methods: {
        handleSubmit(e) {
            e.preventDefault()
            if (this.l_password.length > 0) {
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('api/login', {
                        email: this.l_email,
                        password: this.l_password,
                        remember_me: this.remember_me
                    })
                        .then(response => {
                            console.log(response.data)
                            if (response.data.success) {
                                this.$router.go('/dashboard')
                            } else {
                                this.error = response.data.message
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
            } else if (this.r_password.length > 0) {
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.post('api/register', {
                        name: this.r_name,
                        email: this.r_email,
                        password: this.r_password
                    })
                        .then(response => {
                            if (response.data.success) {
                                window.location.href = "/login"
                            } else {
                                this.error = response.data.message
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
            }
        }
    },
    beforeRouteEnter(to, from, next) {
        if (window.Laravel.isLoggedin) {
            return next('dashboard');
        }
        next();
    }
}
</script>