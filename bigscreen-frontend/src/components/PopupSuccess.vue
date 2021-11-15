<template>
    <main>
        <section class="section-text">
            <p>toute l’équipe de <b>​Bigscreen</b> v​ous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
                Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse:</p>
            <router-link to='/reponse/4'>Vos reponses vous attends</router-link>
        </section>
        <section>
            <router-link to="/"><button class="btnSondage">Sondage</button></router-link>
            <router-link to="/login"><button class="btnLogin">Login</button></router-link>
        </section>
    </main>
</template>
<script>
export default {
    props: {
        sondages: {
            type: Array
        }
    }
}
</script>
<style scoped>
    main {
        height:100vh;

    }
    .section-text {
        margin:10em auto 0em;
        width:50%;

    }
    p {

    }
    .section_boutton {
        margin-top:0em!important;
    }
    button {
        border-radius:0.5em;
        border:1px solid transparent;
        padding:1em;
        margin:2em;
    }
    .btnSondage {
        background: lightgray;
        color:black;
        font-weight:500;
        width:10em;
    }
    .btnSondage:hover {
        background: rgb(187, 186, 186);
        color:white;
        font-weight:500;
        width:10em;
    }
    .btnLogin {
        background: blue;
        color:white;
        font-weight:500;
        width:10em;
    }
    a {

    }
    a:hover {
        
    }
</style>