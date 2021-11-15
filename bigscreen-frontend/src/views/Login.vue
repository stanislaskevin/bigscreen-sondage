<template>
    <main>
        <div class="nav">
            <router-link to="/"><button class="login_nav">sondage</button></router-link>
        </div>
        <section>
            <form v-on:submit.prevent="submitLogin">
                <h1>Login</h1>
                <div class="container-input">
                    <label>Email</label>
                    <input type="text"  v-model="form.email" />
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <div class="container-input">
                    <label>Password</label>
                    <input type="password" v-model="form.password" />
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <button type="submit">Connectez-vous</button>
            </form>
        </section>
    </main>
</template>

<script>
import axios from 'axios'

export default {
    name: "Login",
    emits: ['login'],
    data() {
        return {
            admin: [],
            form : {
                email: '',
                password: '',
            },
            validated: null
        }
    },
    methods: {
        submitLogin() {
            axios.post('http://127.0.0.1:8000/api/login',this.form).then((r)=> {
                console.log(r['data']['status'])
                if(r['data']['status'] == 'error') {
                    this.$router.push('/admin')
                }else {
                    console.log('Vous n\'etes pas administrateur')
                }
            }).catch(error=>console.log(error))
        },
    },
    mounted(){

        }
    }
    /**axios.post('http://127.0.0.1:8000/api/login', {
                    email: this.email,
                    password: this.password
            }).then(r=> {
                    if(r.data.accessToken){
                        localStorage.setItem('login', JSON.stringify(r.data))
                    }
                    console.log(r.data)
                })  **/ 
</script>

<style scoped>
    main {
        background:#f8f9fd;
        height:100%;
        padding-bottom:4em;
    }
    .nav {
        display:flex;
        flex-direction:row-reverse;
        width:90%;
    }
    .login_nav {
        border-radius:0.5em;
        border:1px solid transparent;
        background:rgb(0, 16, 163);
        padding:1em 1em;
        margin:1em auto;
        color:white;
        font-weight:600;
        width:8em!important;
        font-size:0.8em;
    }
    section {

    }
    form {

        width:50%;
        background:white;
        padding: 4em 2em 4em;
        margin:5em auto;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
    form > h1 {
        margin-bottom:2em;
        font-size:2em;
        margin:0 auto 1.5em;

    }
    .container-input {
        display:flex;
        flex-direction:column;
        margin:1em auto 2em;
        text-align:center;
        width:100%;
    }
    .container-input > input {
        border-radius:5em;
        border:1px solid transparent;
        background:rgb(228, 227, 227);
        padding:0.8em 1em;
        margin:1em auto;
        width:50%;

    }
    .container-input > label {
        font-size:1.2em;
       font-weight:600;
       padding-bottom:1em;

    }
    button {
        border-radius:5em;
        border:1px solid transparent;
        background:rgb(0, 16, 163);
        padding:1em 1em;
        margin:1em auto;
        width:15em;
        color:white;
        font-weight:600;
        font-size:0.8em;
    }
    
</style>