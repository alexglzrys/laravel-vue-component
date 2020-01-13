<template>
  <div>
    <h1 class="text-center title">Captura tus ideas</h1>
      <div class="card mt-4">
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
                  <li>
                      <span class="text-muted mr-1"><em>Hace un momento</em></span>
                      Mi nueva idea
                  </li>
              </ul>
          </div>
      </div>
  </div>
</template>

<script>
export default {
  name: 'Idea'
}
</script>

<style scoped>
  .title {
    margin: 1rem 0;
  }
</style>