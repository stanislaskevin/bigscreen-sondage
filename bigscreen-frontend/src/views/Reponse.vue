<template>
    <main>
        <div class="nav">
            <router-link to="/login"><button class="login_nav">Login</button></router-link>
        </div>
        <section>
            <div class="entete">
                <h1>Bigscreen</h1>
                <p>Vous pouvez consulter vos réponses ici.</p>
            </div>
            <div class="reponses" >
                <h1>Réponse à votre sondage</h1>
                <div class="container-question">
                    <span>Question 1/20</span>
                    <label>Email</label>
                    <p class="reponse">{{reponse.q1}}</p>
                </div>
                <div class="container-question">
                    <span>Question 2/20</span>
                    <label>Sexe</label>
                    <p class="reponse">{{reponse.q2}}</p>
                </div>
                <div class="container-question">
                    <span>Question 3/20</span>
                    <label>Age</label>
                    <p class="reponse">{{reponse.q3}} ans</p>
                </div>
                <div class="container-question">
                    <span>Question 4/20</span>
                    <label>Nombre de personne dans votre foyer (adulte & enfants)</label>
                    <p class="reponse">{{reponse.q4}}</p>
                </div>
                <div class="container-question">
                    <span>Question 5/20</span>
                    <label>Votre profession ?</label>
                    <p class="reponse">{{reponse.q5}}</p>
                </div>
                <div class="container-question">
                    <span>Question 6/20</span>
                    <label>Quel marque de casque VR utilisez vous ?</label>
                    <p class="reponse">{{reponse.q6}}</p>
                </div>
                <div class="container-question">
                    <span>Question 7/20</span>
                    <label>Sur quel magasin d’application achetez vous des contenus VR ?</label>
                    <p class="reponse">{{reponse.q7}}</p>
                </div>
                <div class="container-question">
                    <span>Question 8/20</span>
                    <label>Quel casque envisagez vous d’acheter dans un futur proche ?</label>
                    <p class="reponse">{{reponse.q8}}</p>
                </div>
                <div class="container-question">
                    <span>Question 9/20</span>
                    <label>Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
                    <p class="reponse">{{reponse.q9}}</p>
                </div>
                <div class="container-question">
                    <span>Question 10/20</span>
                    <label>Vous utilisez principalement Bigscreen pour :</label>
                    <p class="reponse">{{reponse.q10}}</p>
                </div>
                <div class="container-question">
                    <span>Question 11/20</span>
                    <label>Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
                    <p class="reponse">{{reponse.q11}}</p>
                </div>
                <div class="container-question">
                    <span>Question 12/20</span>
                    <label>Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?</label>
                    <p class="reponse">{{reponse.q12}}</p>
                </div>
                <div class="container-question">
                    <span>Question 13/20</span>
                    <label>Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
                    <p class="reponse">{{reponse.q13}}</p>
                </div>
                <div class="container-question">
                    <span>Question 14/20</span>
                    <label>Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?</label>
                    <p class="reponse">{{reponse.q14}}</p>
                </div>
                <div class="container-question">
                    <span>Question 15/20</span>
                    <label>Combien donnez vous de point pour la qualité audio dans Bigscreen ?</label>
                    <p class="reponse">{{reponse.q15}}</p>
                </div>
                <div class="container-question">
                    <span>Question 16/20</span>
                    <label>Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>
                    <p class="reponse">{{reponse.q16}}</p>
                </div>
                <div class="container-question">
                    <span>Question 17/20</span>
                    <label>Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>
                    <p class="reponse">{{reponse.q17}}</p>
                </div>
                <div class="container-question">
                    <span>Question 18/20</span>
                    <label>Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                    <p class="reponse">{{reponse.q18}}</p>
                </div>
                <div class="container-question">
                    <span>Question 19/20</span>
                    <label>Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                    <p class="reponse">{{reponse.q19}}</p>
                </div>
                <div class="container-question">
                    <span>Question 20/20</span>
                    <label>Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                    <p class="reponse">{{reponse.q20}}</p>
                </div>

            </div>
        </section>
    </main>
</template>

<script>
    export default {
        props : {
            sondages:{
                type: Array
            },
            reponse: {
                type: Object
            }
        },       
    }
</script>

<style scoped>
    main {
        background:#f8f9fd;
        height: 100vh;
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
        width:8em;
        font-size:0.8em;
    }
    section {

    }
    .entete {
        padding:3em 0 4em ;
    }
    .reponses {
        width:80%;
        background:white;
        padding: 4em 2em 4em;
        margin:0 auto;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
    .reponses > h1 {
        margin-bottom:2em;
        font-size:2em;

    }
    .container-question {
        display:flex;
        flex-direction:column;
        margin:1em auto 2em;
        text-align:left;
        width:50%;
    }
    .container-question > p{
        color: rgb(0, 16, 163);
        font-weight: 600;
        font-size:1.5em;
    }
    
    .container-question > span {
       font-size:1.2em;
       font-weight:600;
       padding-bottom:1em;

    }
    .container-question > label {
        font-size:1.2em;
       font-weight:400;
       padding-bottom:0em;

    }
    button {
        border-radius:5em;
        border:1px solid transparent;
        background:rgb(0, 16, 163);
        padding:1em 1em;
        margin:1em auto;
        width:30%;
        color:white;
        font-weight:600;
        font-size:0.8em;
    }

</style>