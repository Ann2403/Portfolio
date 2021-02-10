<template>
  <div id="app">
      <div class="container main">
          <transition name='dark_danger' mode="out-in">
              <router-view/>
          </transition>
      </div>
      <transition name='dark_danger'>
          <app-footer v-if="$route.path !== '/'"></app-footer>
      </transition>
  </div>
</template>

<script>
import AppFooter from './components/Footer'

export default {
    components: {
        AppFooter
    },
    data() {
        return {

        }
    }
}
</script>

<style>
body {
    font-family: "Crimson";
}

.main {
    background: #45f5f51f;
    height: 800px;
}

.dark_danger-enter{

}

.dark_danger-enter-active{
    animation: slideIn 0.5s;
}

.dark_danger-enter-to{

}

.dark_danger-leave{
    /*position: absolute;*/
}

.dark_danger-leave-active{
    animation: slideOut 0.5s;
}

.dark_danger-leave-to{
    /*position: absolute;*/
}

@keyframes slideIn {
    from{transform: translateX(2000px);}
    to{transform: translateX(0px);}
}

@keyframes slideOut {
    from{transform: translateX(0px);}
    to{transform: translateX(-2000px);}
}
</style>
