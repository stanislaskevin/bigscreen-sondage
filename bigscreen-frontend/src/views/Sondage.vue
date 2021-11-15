<template>
    <main>
        <div class="nav">
            <router-link to="/login"><button class="login_nav">Login</button></router-link>
        </div>
        <section>
            <div class="entete">
                <h1>Bigscreen</h1>
                <p>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</p>
            </div>
            <form @submit.prevent="onSubmit">
                <h1>Sondage</h1>
                <div class="container-question">
                    <span>Question 1/20</span>
                    <label>Email</label>
                    <input type="text" v-model="q1" />
                    <div class="text-error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <div class="container-question">
                    <span>Question 2/20</span>
                    <label>Sexe</label>
                    <select v-model="q2">
                        <option>Homme</option>
                        <option>femme</option>
                        <option>Autre</option>
                    </select>
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <div class="container-question">
                    <span>Question 3/20</span>
                    <label>Age</label>
                    <input type="number" v-model="q3" />
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <div class="container-question">
                    <span>Question 4/20</span>
                    <label>Nombre de personne dans votre foyer (adulte & enfants)</label>
                    <select v-model="q4">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 5/20</span>
                    <label>Votre profession ?</label>
                    <input type="text" v-model="q5" />
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <div class="container-question">
                    <span>Question 6/20</span>
                    <label>Quel marque de casque VR utilisez vous ?</label>
                    <select v-model="q6" >
                        <option>Occulus Rift/s</option>
                        <option>HTC Vive</option>
                        <option> Windows Mixed Reality</option>
                        <option>PSVR</option>
                    </select>
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <div class="container-question">
                    <span>Question 7/20</span>
                    <label>Sur quel magasin d’application achetez vous des contenus VR ?</label>
                    <select v-model="q7">
                        <option>SteamVR</option>
                        <option>Occulus store</option>
                        <option>Viveport</option>
                        <option>Playstation VR</option>
                        <option>Google Play</option>
                        <option>Windows store</option>
                    </select>
                </div>
                <div class="container-question">
                    <span>Question 8/20</span>
                    <label>Quel casque envisagez vous d’acheter dans un futur proche ?</label>
                    <select v-model="q8">
                        <option>Occulus Quest</option>
                        <option>Occulus Go</option>
                        <option>Viveport</option>
                        <option>HTC Vive Pro</option>
                        <option>Autre</option>
                        <option>Aucun</option>
                    </select>
                </div>
                <div class="container-question">
                    <span>Question 9/20</span>
                    <label>Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
                    <select v-model="q9">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 10/20</span>
                    <label>Vous utilisez principalement Bigscreen pour :</label>
                    <select v-model="q10">
                        <option>regarder des émissions TV en direct</option>
                        <option>regarder des films</option>
                        <option>jouer en solo</option>
                        <option>jouer en team</option>
                    </select>
                </div>
                <div class="container-question">
                    <span>Question 11/20</span>
                    <label>Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
                    <select v-model="q11">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 12/20</span>
                    <label>Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?</label>
                    <select v-model="q12">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 13/20</span>
                    <label>Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
                    <select v-model="q13">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 14/20</span>
                    <label>Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?</label>
                    <select v-model="q14">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 15/20</span>
                    <label>Combien donnez vous de point pour la qualité audio dans Bigscreen ?</label>
                    <select v-model="q15">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="error" v-if="validated"><span>Chiffre max 5</span></div>
                </div>
                <div class="container-question">
                    <span>Question 16/20</span>
                    <label>Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>
                    <div class="container_checkbox">
                        <select v-model="q16">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>
                </div>
                <div class="container-question">
                    <span>Question 17/20</span>
                    <label>Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>
                    <select v-model="q17">
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                </div>
                <div class="container-question">
                    <span>Question 18/20</span>
                    <label>Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                    <select v-model="q18">
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                </div>
                <div class="container-question">
                    <span>Question 19/20</span>
                    <label>Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                    <select v-model="q19">
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                </div>
                <div class="container-question">
                    <span>Question 20/20</span>
                    <label>Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                    <input type="text" v-model="q20" />
                    <div class="error" v-if="validated"><span>Votre réponse n'est pas valide</span></div>
                </div>
                <button type="submit" >Envoyer</button>
            </form>
        </section>
    </main>
</template>

<script>
    export default {
        name: 'Sondage',
        data() {
            return {
                q1 : "",
                q2 : "",
                q3 : "",
                q4 : "",
                q5 : "",
                q6 : "",
                q7 : "",
                q8 : "",
                q9 : "",
                q10 : "",
                q11 : "",
                q12 : "",
                q13 : "",
                q14 : "",
                q15 : "",
                q16 : "",
                q17 : "",
                q18 : "",
                q19 : "",
                q20 : "",
                validated: null,
            }
        },
        emits : ['new-sondage'],
        methods : {
            validateData(){
                if(this.q1.length>255)  return false;
                return true;
            },
            onSubmit() {
                this.$emit('new-sondage', {
                    q1: this.q1,
                    q2:  this.q2,
                    q3:  this.q3,
                    q4:  this.q4,
                    q5:  this.q5,
                    q6:  this.q6,
                    q7:  this.q7,
                    q8:  this.q8,
                    q9:  this.q9,
                    q10:  this.q10,
                    q11:  this.q11,
                    q12:  this.q12,
                    q13:  this.q13,
                    q14:  this.q14,
                    q15:  this.q15,
                    q16:  this.q16,
                    q17:  this.q17,
                    q18:  this.q18,
                    q19:  this.q19,
                    q20:  this.q20
                })

                //afficher popup after validation
                this.$router.push('/popupSuccess')
            }
        }
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
    form {
        width:80%;
        background:white;
        padding: 4em 2em 4em;
        margin:0 auto;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
    form > h1 {
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
    .container-question > input {
        border-radius:5em;
        border:1px solid transparent;
        background:rgb(228, 227, 227);
        padding:0.8em 1em;
        margin:1em auto;
        width:100%;

    }
    .container-question > select {
        border:1px solid transparent;
        background:rgb(228, 227, 227);
        padding:0.8em 1em;
        margin:1em auto;
        width:100%;

    }
    .container-question > span {
       font-size:1em;
       font-weight:400;
       padding-bottom:1em;

    }
    .container-question > label {
        font-size:1.2em;
       font-weight:600;
       padding-bottom:1em;

    }
    .checkbox > label {
        margin-left:0.5em;
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