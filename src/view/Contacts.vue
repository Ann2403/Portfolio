<template>
    <div class="col-sm text-center">
        <app-nav :menu='false'></app-nav>
        <h3 class="text-uppercase mt-5">Контакты</h3>
        <div class="row my-4">
            <p class="font-italic font-weight-bold col-sm">
                Адрес: Украина, г.Днепр
            </p>
            <p class="font-italic font-weight-bold col-sm">
                Телефон:
                <a class="text-dark" href="tel:+380965202933">0965202933</a>
            </p>
        </div>

        <form @submit="submitToEmail">
            <h5 class="text-uppercase my-5">Связаться со мной:</h5>
            <app-input v-for='(obj, index) in infoInput' :key="'input' + index"
                       :name='obj.name' :pattern='obj.pattern' :value='obj.value' :typeInput="obj.type"
                       :nameLabel = 'obj.nameLabel'
                       @changeValue='onChange(index, $event)'>
            </app-input>
            <app-area v-for='(obj, index) in infoArea' :key="'area' + index"
                      :value='obj.value' :nameArea = 'obj.nameArea'
                      @changeValue='onChange(index, $event)'>
            </app-area>
            <button type="submit" class="btn btn-outline-primary border-dark">
                Отправить</button>
        </form>
    </div>
</template>

<script>
import AppNav from '../components/Nav'
import AppInput from '../components/Input'
import AppArea from '../components/TextArea'
import AppModal from '../components/ModalWindow'

export default {
    name: "Contacts",
    components: {
        AppNav,
        AppInput,
        AppArea,
        AppModal
    },
    data() {
        return {
            infoInput: [
                {
                    name: 'name',
                    type: 'text',
                    nameLabel: 'Ваше имя',
                    value: '',
                    pattern: /^[а-яА-Яa-zA-Z]{2,30}$/
                },
                {
                    name: 'email',
                    type: 'email',
                    nameLabel: 'Ваш email',
                    value: '',
                    pattern: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/
                }
            ],
            infoArea: [
                {
                    name: 'text',
                    nameArea: 'Текст сообщения',
                    value: ''
                }
            ]
        }
    },
    methods: {
        onChange(index, data) {
            if(data.type === 'area') {
                this.infoArea[index].value = data.value;
            } else {
                this.infoInput[index].value = data.value;
            }
        },
        submitToEmail(e) {
            e.preventDefault();

            this.$axios
                .post(
                    "https://theServer.com/mail.php",
                    querystring.stringify(this.form)
                )
                .then(res => {
                    this.sent = true;
                });
        }
    }
}
</script>