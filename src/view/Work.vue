<template>
    <div class="col-sm">
        <div class="row cardContainer justify-content-center">
            <div class="p-2 text-center col-sm-9 col-md-6 col-lg-4" v-for="(item, i) in site" :key="i"
                 @click="showDesc(i)">
                    <transition name="showCard" mode="out-in">
                        <img v-if="!showText[i]" :src="item.image" class="appCard" :alt="item.altImage">
                        <div v-else class="appCard p-3 d-flex flex-column justify-content-center align-items-center border border-dark">
                            <h5 class="card-title text-uppercase font-weight-bold">{{ item.title }}</h5>
                            <p class="card-text"><strong>Описание: </strong>{{item.description }}</p>
                            <p class="card-text mb-4"><strong>Технологии: </strong>{{item.technologies }}</p>
                            <div class="col">
                                <a :href="item.reference" target="_blank" class="btn btn-primary mr-3">Перейти</a>
                                <a :href="item.git" target="_blank" class="btn btn-primary">Git</a>
                            </div>

                        </div>
                    </transition>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "Work",
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
.appCard {
    width: 100%;
    height: 283px;
}

.cardContainer {
    height: 600px;
    overflow-y: auto;
}

::-webkit-scrollbar-track {
box-shadow:0px 0px 3px #000 inset;
border-radius: 10px;
}

::-webkit-scrollbar-thumb {
border-radius: 10px;
background-image: -webkit-gradient(linear,
                                    left bottom,
                                    left top,
                                    color-stop(0.44, rgb(122,153,217)),
                                    color-stop(0.72, rgb(73,125,189)),
                                    color-stop(0.86, rgb(28,58,148)));	
}

::-webkit-scrollbar{
width: 11px;
}

.showCard-enter-active {
    animation: showCard-in 1s;
}

.showCard-leave-active {
    animation: showCard-out 1s reverse;
}

@keyframes showCard-in {
    0% { transform: rotateY(0); }
  16% { transform: rotateY(60deg); }
}

</style>