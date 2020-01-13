<template>
  <div>
    <h1 class="text-center title">Captura tus ideas</h1>
      <div class="card mt-4 mb-4">
          <div class="card-header">
              <h4>¿En qué estas pensando?</h4>
          </div>
          <div class="card-body">
              <form @submit.prevent="createIdea">
                  <div class="input-group input-group-sm mt-3 mb-3">
                      <input type="text" v-model="newIdea" class="form-control" placeholder="Ingrese la descripción de la tarea">
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-primary" @click.prevent="createIdea">Agregar</button>
                      </div>
                  </div>
              </form>
          </div>
          <div class="card-footer">
              <ul class="list-unstyled">
                  <li v-for="idea in ideas" :key="idea.id">
                      <span class="text-muted mr-1">
                        <em>{{ since(idea.created_at) }}</em>
                      </span>
                      {{ idea.description }}
                  </li>
              </ul>
          </div>
      </div>
  </div>
</template>

<script>
/**
 * Nota importante: Al finalizar el proyecto, es necesario compilar nuestros assets en modo producción.
 *                  De hacer caso omiso, Vue nos notificará por consola que se encuentra en modo desarrollo
 *                  comando: npm run production
 */

// Modulos o librerías importadas de forma local - solo para este componente
import toast from 'toastr';
import moment from 'moment';

// Configurar idioma español - librería moment.js
moment.locale('es')

export default {
  name: 'Idea',
  data() {
    return {
      ideas: [],
      error: [],
      newIdea: '',
    }
  },
  methods: {
    // Formatear fechas para humanos
    since(date) {
      return moment(date).fromNow();
    },

    // Recuperar todas los registros de tipo Idea -- Controller@index
    getIdeas() {
      const URL = '/ideas';
      // Axios es agregado por Laravel de forma global al objeto window. -- scaffolding
      // No es necesario importarlo de forma local en este componente mediante -- import axios from 'axios'
      axios.get(URL).then(response => {
        this.ideas = response.data;
      }).catch(error => {
        this.error = error.response.data;
      });
    },

    // Almacenar una registro de tipo Idea -- Controller@store
    createIdea() {
      const URL = '/ideas';
      axios.post(URL, {'description': this.newIdea}).then(response => {
        this.getIdeas();
        this.newIdea = '';
        toast.success(response.data.message, 'Información del sistema');
      }).catch(error => {
        this.error = error.response.data;
        toast.error(error.response.data.errors.description, 'Advertencia del sistema');
      });
    }
  },
  created() {
    this.getIdeas();
  }
}
</script>

<style scoped>
  .title {
    margin: 1rem 0;
  }
</style>