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
                <h1>Acceuil Admin</h1>
            </div>
            <div class="section-graph">
                <div class="container-graph">
                    <DoughnutChart :chartData="equipementData" />
                </div>
                <div class="container-graph">
                    <DoughnutChart :chartData="equipementData2" />
                </div>
                <div class="container-graph">
                    <DoughnutChart :chartData="equipementData3" />
                </div>
                <div class="container-graph">
                    <RadarChart :chartData="resultatData" />
                </div>
            </div>
        </section>
        
    </main>
</template>

<script >
import { defineComponent } from 'vue';
import { DoughnutChart, RadarChart} from 'vue-chart-3';
import {Chart, registerables} from 'chart.js'
import axios from 'axios'

Chart.register(...registerables);

export default defineComponent({
  name: 'Home',
  components: { DoughnutChart, RadarChart },
  props: {
      sondages: {
          type: Array
      }
  },
  data() {
      return {
          sondageData : null
      }
  },
  setup() { 
      const sondage =  
          axios.get('http://127.0.0.1:8000/api/sondage/reponses').then(r=>{
            const sondages = r.data
            return sondages    
      }).catch(error=>console.log(error))
      
    const sondages = ['10', '16', '18', '34', '3', '28']
    const equipementData = {
      labels: ['SteamVr', 'Occulus store', 'Vieport', 'Playstation VR', 'Google Play', 'Windows store'],
      datasets: [
        {
          data: [sondages[5],sondages[3], sondages[2], sondages[4], sondages[0], sondages[3], sondages[1]],
          backgroundColor: ['#77CEFF', '#0079AF', '#123E6B', '#97B0C4', '#A5C8ED'],
        },
      ],
    };

    const equipementData2 = {
      labels: ['Occulus Quest', 'Occulus Go', 'HTC Vive Pro', 'Autre', 'Aucun'],
      datasets: [
        {
          data: [sondages[0],sondages[1],sondages[0],sondages[2],sondages[2]],
          backgroundColor: ['#77CEFF', '#0079AF', '#123E6B', '#97B0C4', '#A5C8ED'],
        },
      ],
    };

    const equipementData3 = {
      labels: ['regarder des émissions TV en direct', 'regarder des films', 'jouer en solo', 'jouer en team'],
      datasets: [
        {
          data: [sondages[0],sondages[1],sondages[0],sondages[2]],
          backgroundColor: ['#77CEFF', '#0079AF', '#123E6B', '#97B0C4', '#A5C8ED'],
        },
      ],
    };

    const resultatData = {
      labels: ['image', 'confort d’utilisation de l’interface', 'connection réseau', 'graphismes 3D', 'audio'],
      datasets: [
        {
          data: [sondages[4],sondages[1],sondages[5],sondages[2]],
          backgroundColor: ['#77CEFF', '#0079AF', '#123E6B', '#97B0C4', '#A5C8ED'],
        },
      ],
    };

    return { equipementData, equipementData2, equipementData3, resultatData };
  },
  mounted() {
      axios.get('http://127.0.0.1:8000/api/sondage/reponses').then(r=>{
          this.sondageData = r.data         
      }).catch(error=>console.log(error))
}});
</script>

<style scoped>

    main {
        margin:0;
        display:flex;
        flex-direction:row;
        height:100vh;
        
    }
    header {
        background:blue;
        width:30%;
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
        background:lightblue;
        width:80%;

        overflow: scroll;
        
    }
    .section-graph {
        margin:0 auto;
        display:flex;
        flex-wrap: wrap;
    }
    .container-graphs {
        background:white;
        border-radius: 0.5em;
        padding:4em;
        margin:2em auto;
        width:10em;
    }
    .container-graph {
        margin:2em auto;
        width:25em;
    }
</style>