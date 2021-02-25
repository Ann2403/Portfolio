<template>
        <div class="col-sm text-center">
            <div class="logo">
                <img src="../assets/images/logo.png" alt="logo">
                <h3 class="font-weight-bold text-uppercase mt-3">кто я</h3>
            </div>
            <p class="h5 font-italic mt-2">
                Человек который получает удовольствие не только от результатов работы,
                но и от самого процесса создания проэкта и поиска новых решений!
            </p>
            <app-nav :menu='true'></app-nav>
            <div class="social my-5">
                <a href="https://www.facebook.com/profile.php?id=100012680205470" class="mr-3"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ann_edyardovna/" class="mr-3"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://t.me/Zubenko_Ann" class="mr-3"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/zubenko-anna" class="mr-3"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="https://github.com/Ann2403"><i class="fa fa-github" aria-hidden="true"></i></a>
            </div>
        </div>
</template>

<script>
import AppNav from '../components/Nav'

export default {
    name: "Home",
    components: {
        AppNav
    },
    data() {
        return {

        }
    }
}
</script>

<style scoped>
.logo {
    padding-top: 50px;
}

.social a i {
    height: 30px;
    width: 30px;
    border: 1px solid #111;
    line-height: 30px;
    color: #111;
    font-size: 20px;
}

.social a:hover i {
    border: none;
    background-color: #36f0f5;
    transform: scale(1.3);
}
</style>