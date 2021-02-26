<template>
    <div id="menu" :class="{'text-right': !menu}">
        <div class="btn-group-vertical" v-if="menu">
            <router-link v-for="btnObj in mainMenu" :to="btnObj.page"
                         class="btn mt-3 btn-home border-dark font-weight-bold"
                         :key="btnObj.key">
                {{ btnObj.name }}
            </router-link>
        </div>
        <div class="btn-group my-5" v-else>
            <router-link v-for="btnObj in btnGroup" :to="btnObj.page"
                         class="btn p-1 p-md-2 mr-2 mr-md-3 btn-home border-dark font-weight-bold"
                         :key="btnObj.key">
                {{ btnObj.name }}
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "Nav",
    props: ['menu', 'nav'],
    data() {
        return {
            btnGroup: [
                {
                    name: 'Главная',
                    page: '/',
                    key: 'home'
                },
                {
                    name: 'Скилы',
                    page: '/about',
                    key: 'about'
                },
                {
                    name: 'Работы',
                    page: '/work',
                    key: 'work'
                },
                {
                    name: 'Контакты',
                    page: '/contacts',
                    key: 'contacts'
                }
            ],
            itemSize: 0,
            btnMenu: []
        }
    },
    computed: {
        mainMenu() {
            let mainBtn = this.btnGroup;
            mainBtn.splice(0, 1);
            return mainBtn;
        }
    },
    methods: {
        onResize() {
            this.itemSize = document.documentElement.clientWidth;
        }
    },
    created() {
        window.addEventListener('resize', this.onResize);
        this.onResize();
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.onResize);
    }
}
</script>

<style scoped>
.btn-home {
    background-color: #6df3f763;
}

.btn-home:hover, .router-link-active:hover {
    transform: scale(1.2);
    box-shadow: 0 0 4px 3px #0070ff9e;
}

.router-link-exact-active {
    box-shadow: 0 0 4px 3px #0070ff9e;
}

@media (max-width: 767px){
  .router-link-active:hover {transform: none;}
}
</style>