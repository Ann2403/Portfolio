<template>
    <div class="form-group text-left">
        <label :for="name">
            {{ nameArea }}
        </label>
        <textarea class="form-control" rows="5" required
                  :id="name" :name="name"
                  @input="change" />
    </div>
</template>

<script>
export default {
    props: ['name', 'value', 'nameArea'],
    methods: {
        change(e) {
            this.$emit('changeValue', {
                value: e.target.value,
                type: 'area'
            });
        }
    }
}
</script>