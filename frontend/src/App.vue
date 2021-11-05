<template>
  <LinkShortener/>
</template>

<script>
import LinkShortener from './components/LinkShortener.vue'

export default {
  name: 'App',
  components: {
    LinkShortener
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 0;
  height: 100%;
}



html {
  height: 100%;
}

body {
  font-family: 'Nunito', sans-serif;
  height: 100%;
}
</style>
