import { createRouter, createWebHistory } from 'vue-router';
import Sondage from '../views/Sondage.vue';
import Reponse from '../views/Reponse.vue';

import Home from '../views/admin/Home.vue';
import Questionnaires from '../views/admin/Questionnaires.vue';
import Reponses from '../views/admin/Reponses.vue';

const routes = [
  // Route Client
  {
    path: '/',
    name: 'Sondage',
    component: Sondage,
  },
  {
    path: '/reponse/:id',
    name: 'Reponse',
    component: Reponse,
  },

  // Route Admin
  {
    path: '/admin',
    name: 'Home',
    component: Home,
  },
  {
    path: '/admin/questionnaires',
    name: 'Questionnaires',
    component: Questionnaires,
  },
  {
    path: '/admin/reponses',
    name: 'Reponses',
    component: Reponses,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

// Systeme de private route a mettre en place
/** 
router.beforeEach((to, from, next) => {
  if (to.name !== 'Login' && !isAuthenticated) next({ name: 'Login' })
  else next()
})
router.afterEach((to, from) => {
  // ...
})
**/


export default router;
