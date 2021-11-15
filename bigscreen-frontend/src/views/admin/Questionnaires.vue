<template>
    <main>
        <header>
            <div class="nav">
                <router-link to="/admin">Acceuil</router-link>
                <router-link to="/admin/questionnaire">Questionnaire</router-link>
                <router-link to="/admin/reponses">Reponses</router-link>
            </div>
        </header>
        <section>
            <div class="title">
                <h1>Questionnaires</h1>
            </div>
            <div class="container-questionnaire">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">numero</th>
                            <th scope="col">questions</th>
                            <th scope="col">type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>email</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>sexe</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Age</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nombre de personne dans votre foyer (adulte & enfants)</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Votre profession ?</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Quel marque de casque VR utilisez vous ?</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sur quel magasin d’application achetez vous des contenus VR ?</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Quel casque envisagez vous d’acheter dans un futur proche ?</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Vous utilisez principalement Bigscreen pour :</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Combien donnez vous de point pour la connection réseau de Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Combien donnez vous de point pour la qualité audio dans Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</td>
                            <td>B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</template>

<script>

</script>

<style scoped>
    main {
        margin:0;
        padding:0;
        display:flex;
        flex-direction:row;
        height:100vh;
        
    }
    header {
        background:rgb(0, 0, 107);
        width:20%;
    }
    .nav {
        display:flex;
        flex-direction: column;
        text-align:left;
        padding:1em;
        padding-top:2em;
    }
    .nav > a {
        color:white;
        text-decoration:none;
        font-size:1em;
        font-weight:600;
        margin:0.5em;
    }
    .nav > a:hover {
        color:lightblue;
        text-decoration:none;
        font-size:1em;
        font-weight:600;
    }
    section {
        width:80%;
        overflow:scroll;
        
    }
    table {
        width:80%;
        margin:2em auto;
    }
    thead {
         
    }
    tbody {
         
    }
    tr {
         border:1px solid black;
         padding:4em;
    }
    th {
         border:1px solid black;
          padding:2em;
    }
    td {
         border:1px solid black;
         padding:2em;
    }
</style>