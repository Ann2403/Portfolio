<template>
    <footer class="mt-2">
        <div class="container">
            <div class="row">
                <div class="text-right pr-5 hidden-xs hidden-sm col-md-6">
                    <a class="text-dark" href="mailto:zubenko9529@gmail.com"><i class="fa fa-envelope"></i>
                        zubenko9529@gmail.com
                    </a>
                </div>
                <div class="hidden-xs hidden-sm col-md-6 pl-5">
                    <ul>
                        <li class="d-inline mr-3" v-for="(social, i) in socialList">
                            <a class="text-dark" :href="social.link" target="_blank"><i :class="social.icon"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer",
    data() {
        return {
            socialList: [
                {
                    icon: 'fa fa-facebook',
                    link: 'https://www.facebook.com/profile.php?id=100012680205470'
                },
                {
                    icon: 'fa fa-instagram',
                    link: 'https://www.instagram.com/ann_edyardovna/'
                },
                {
                    icon: 'fa fa-telegram',
                    link: 'https://t.me/Zubenko_Ann'
                },
                {
                    icon: 'fa fa-linkedin',
                    link: 'https://www.linkedin.com/in/ann-zubenko-798594151'
                }
            ]
        }
    }
}
</script>

<style scoped>
footer li i:hover {
    transform: scale(1.2);
}
</style>