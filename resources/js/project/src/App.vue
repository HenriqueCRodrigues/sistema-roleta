<template>
  <div id="app">
    <img class="image" id="spin" alt="Vue logo" src="./../public/images/spin.png">
    <Spin msg="Roleta de Desconto"/>
  </div>
</template>

<script>
import Spin from './components/Spin.vue'

export default {
  name: 'App',
  components: {
    Spin
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.image {
    width: 520px;
    height: 520px;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
</style>
