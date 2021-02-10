<template>
        <div class="row">
            <div class="col-sm">
                <img class="img-fluid" src="../assets/images/about.jpg" alt="photo">
            </div>

            <div class="col-sm text-center">
                <app-nav :menu='false'></app-nav>
                <h2 class="text-uppercase mt-5">О СЕБЕ</h2>
                <p class="h5 font-italic font-weight-bold my-4">
                    Привет, я Анна. Начинающий веб-разработчик, имею практические навыки верстки, работы с
                    фреймворком Vue.js и РНР.
                </p>
                <p class="font-italic">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."
                </p>
            </div>
        </div>
</template>

<script>
import AppNav from '../components/Nav'

export default {
    name: "About",
    components: {
        AppNav
    }
}
</script>

<style scoped>

</style>