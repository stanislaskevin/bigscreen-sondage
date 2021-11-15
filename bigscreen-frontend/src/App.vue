<template>
  <router-view id="router-view" @new-sondage="onNewSondage" :reponse="reponse" @login="login" :graphData="graphData" :sondages="sondages" />
</template>

<script>
import axios from 'axios'
import database from './services/database'

  export default {
    name: 'App',
    data() {
      return {
        loading: false,
        sondages: [],
        reponse: [],
        graphData: []
      }
    },
    methods : {
      login(form) {
        database.login(form).then(r=> {
          console.log(r['data']['status'])
          if(r['data']['status'] == 'error') {
              this.$router.push('/admin')
          } else {
              console.log('Vous n\'etes pas administrateur')
          }
        })
      },
      onNewSondage(sondage) {
        this.loading = true;
        database.new(sondage).then(r=>{
          if(r.done){
            sondage.id = r.id;
            this.sondages = [ sondage, ...this.sondages];
          }
          this.loading = false;
        }).catch(error=>console.log(error));
      }
    },
    mounted() {
      axios.get('http://127.0.0.1:8000/api/sondage/reponses').then((r) => {
        this.sondages = r.data
      }).catch(error => console.log(error));

      const id = this.$route.params.id 
      if(id>0){        
      axios.get(`http://127.0.0.1:8000/api/sondage/reponses/${id}`).then((r)=>{
            this.reponse = r.data
        }).catch(error=>console.log(error))
      }
    }
  }
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#router-view {
  margin:0;
}
</style>
