<template>
    <div class="overlay">
        <div class="appModal" id="thanks">
            <div class="appModal__close" @click='$emit("modalClose")'>&times;</div>
            <div class="appModal__subtitle">Спасибо за ваш отклик!</div>
            <div class="appModal__descr">Наш менеджер свяжется с вами в ближайшее время!</div>
        </div>
    </div>  
</template>

<script>
export default {
    name: "ModalWindow"
}
</script>

<style scoped>
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    background-color: rgba(0, 0, 0, .56);
}

.appModal {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 380px;
    min-height: 140px;
    background-color: #f2f2f2;
    padding: 40px;
}

.appModal__close {
    position: absolute;
    top: 0;
    right: -40px;
    font-size: 41px;
    line-height: 21px;
    color: red;
    cursor: pointer;
}

.appModal__subtitle {
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    color: black;
}

.appModal__descr {
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    color: black;
}
</style>