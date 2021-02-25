<template>
    <div class="col-sm text-center my-5">
        <h3 class="text-uppercase">Контакты</h3>
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
            <h5 class="text-uppercase my-4">Связаться со мной:</h5>
            <app-input v-for='(obj, index) in infoInput' :key="'input' + index"
                        :pattern='obj.pattern' :value='obj.value' :typeInput="obj.type"
                        :nameLabel = 'obj.nameLabel'
                        @changeValue='onChange(index, $event)'>
            </app-input>
            <app-area v-for='(obj, index) in infoArea' :key="'area' + index"
                      :value='obj.value' :nameArea = 'obj.nameArea'
                      @changeValue='onChange(index, $event)'>
            </app-area>
            <button type="submit" class="btn btn-outline-primary border-dark">
                Отправить
            </button>
        </form>
    </div>
</template>

<script>
import AppInput from '../components/Input'
import AppArea from '../components/TextArea'
import axios from 'axios'

export default {
    name: "Contacts",
    components: {
        AppInput,
        AppArea
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
            ],
            test: 0
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
            let formData = new FormData(); 
            formData.append('test', 'test'); 
            axios
                .post(
                    'https://annazubenko.ru/send.php', {
                        name: this.infoInput[0].value,
                        email: this.infoInput[1].value,
                        text: this.infoArea[0].value
                    }
                )
                .then(response => {
                    console.log(response);
                    this.$emit('modalShow');
                    for(let i = 0; i < this.infoInput; i++) {
                        this.infoInput[i].value = '';
                    }
                    for(let i = 0; i < this.infoArea; i++) {
                        this.infoArea[i].value = '';
                    }
                });
        }
    }
}
</script>