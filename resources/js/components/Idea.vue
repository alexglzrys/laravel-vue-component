<template>
  <div>
    <h1 class="text-center title">Captura tus ideas</h1>
      <div class="card mt-4 mb-4">
          <div class="card-header">
              <h4>¿En qué estas pensando?</h4>
          </div>
          <div class="card-body">
              <form action="#">
                  <div class="input-group input-group-sm mt-3 mb-3">
                      <input type="text" name="description" class="form-control">
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-primary">Agregar</button>
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
// Modulos o librerías importadas de forma local - solo para este componente
import toast from 'toastr';
import moment from 'moment';

export default {
  name: 'Idea',
  data() {
    return {
      ideas: [],
      error: [],
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