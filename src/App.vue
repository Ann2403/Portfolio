<template>
    <div id="app">
        <div class="container main">
          <div class="appContainerNav">
            <app-nav :menu='false' v-if="$route.path !== '/'"></app-nav>
          </div>

            <div class="row">
                <transition name='entry_left'>
                    <div class="col-md col-12" v-if="$route.path !== '/work'">
                      <img v-if="$route.path === '/'" class="img-fluid d-block d-md-none" src="static/images/photo.png" alt="photo">
                      <img class="img-fluid d-none d-md-block mt-5" src="static/images/photo.png" alt="photo">
                    </div>
                </transition>

                <transition name='entry_right' mode="out-in">
                    <router-view @modalShow='modalShow'/>
                </transition>
            </div>
        </div>
        <app-modal v-if="showModal" @modalClose='modalShow'></app-modal>
        <transition name='dark_danger'>
            <app-footer v-if="$route.path !== '/'"></app-footer>
        </transition>
    </div>
</template>

<script>
import AppFooter from './components/Footer'
import AppModal from './components/ModalWindow'
import AppNav from './components/Nav'

export default {
    components: {
        AppFooter,
        AppModal,
        AppNav
    },
    data() {
        return {
            showModal: false
        }
    },
    methods: {
        modalShow() {
            this.showModal = !this.showModal;
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
    height: 750px;
}

.appContainerNav {
  height: 100px;
}

.entry_right-enter-active {
    animation: slideInRight 0.5s;
}

.entry_left-enter-active {
    animation: slideInLeft 0.5s;
}

.entry_right-leave-active,
.entry_left-leave-active {
    animation: slideOut 0.5s;
}

@keyframes slideInRight {
    from{transform: translateX(2000px);}
    to{transform: translateX(0px);}
}

@keyframes slideInLeft {
    from{transform: translateX(-2000px);}
    to{transform: translateX(0px);}
}

@keyframes slideOut {
    from{transform: translateX(0px);}
    to{transform: translateX(2000px);}
}

@media (max-width: 767px){
  .main {height: 100%;}
}

</style>
