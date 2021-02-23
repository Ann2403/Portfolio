<template>
    <div class="col-sm text-right">
        <app-nav :menu='false'></app-nav>
        <div class="row">
            <div class="p-2 text-center col-md-4" v-for="(item, i) in site" :key="i"
                 @click="showDesc(i)">
                    <img v-if="!showText[i]" :src="item.image" class="myCard" :alt="item.altImage">
                    <div v-else class="myCard align-middle">
                        <h5 class="card-title">{{ item.title }}</h5>
                        <p class="card-text">{{item.description }}</p>
                        <a :href="item.reference" target="_blank" class="btn btn-primary">Перейти</a>
                    </div>

            </div>
        </div>
    </div> 
</template>

<script>
import AppNav from '../components/Nav';
import axios from 'axios';

export default {
    name: "Work",
    components: {
      AppNav
    },
    data() {
        return {
            site: [],
            showText: []
        }
    },
    beforeCreate: function() {
        axios.get('static/site.json').then(response => {
            this.site = response.data.sites;
              for (let i = 0; i < this.site.length; i++) {
                   this.showText.push(false);
             }
        });
    },
    methods: {
        showDesc(i) {
           this.$set(this.showText, i, !this.showText[i]);
        }
    }
}
</script>

<style scoped>
.myCard {
    width: 100%;
    height: 283px;
}
/*
.showCard-enter-active {
    animation: showCard-in .5s;
}
.showCard-leave-active {
    animation: showCard-in .5s reverse;
}
@keyframes showCard-in {
    0% {
        transform: scale(0);
    }
    50% {
        transform: scale(1.5);
    }
    100% {
        transform: scale(1);
    }
}*/
</style>