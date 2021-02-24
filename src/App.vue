<template>
    <div id="app">
        <div class="container main">
            <div class="row">
                <transition name='entry_left'>
                    <div class="col-sm" v-if="$route.path !== '/work'">
                        <img class="img-fluid my-auto" src="static/images/photo.png" alt="photo">
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

export default {
    components: {
        AppFooter,
        AppModal
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
</style>
