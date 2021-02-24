<template>
        <div class="col-sm text-center">
            <app-nav :menu='false' class="mb-5"></app-nav>
            <h2 class="text-uppercase mt-5">О СЕБЕ</h2>
            <p class="h5 font-italic font-weight-bold my-4">
                Привет, я Анна. Начинающий веб-разработчик, имею практические навыки верстки, работы с
                фреймворком Vue.js и РНР.
            </p>
            <div class="text-left my-3">
                <h5 class="font-weight-bold">Навыки:</h5>
                <ul class="list-group">
                    <li class="listSkills" v-for="(skill, index) in skills" :key="index">{{skill}}</li>
                </ul>
            </div>
            <div class="text-right">
                <a type="button" class="btn btn-info" target="_blank"
                   href="https://drive.google.com/file/d/1gOoYh-yAuxE8HVLBXH3wh436RM-dCXca/view?usp=sharing">
                    Скачать резюме
                </a>
            </div>
        </div>
</template>

<script>
import AppNav from '../components/Nav'

export default {
    name: "About",
    components: {
        AppNav
    },
    data() {
        return {
            skills: [
                'JavaScript, VueJs',
                'PHP, MySQL',
                'HTML, CSS, адаптивная верстка',
                'SCSS/SASS, Bootstrap, БЭМ',
                'Git',
                'Figma, Avacode, Photoshop',
                'Английский Elementary'
            ]
        }
    }
}
</script>

<style scoped>
.listSkills {
    list-style: none;
}
</style>