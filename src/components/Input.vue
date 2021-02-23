<template>
	<div class="form-group text-left">
		<label :for="name">
			{{ nameLabel }}
			<i v-if="activated" :class="validClass"></i>
		</label>
		<input :id="name" :name="name" :type="typeInput" class="form-control" required
               @input="change" />
	</div>
</template>

<script>
export default {
	props: ['name', 'value', 'pattern', 'typeInput', 'nameLabel'],
	methods: {
		change(e) {
			this.activated = true;
			this.$emit('changeValue', {
                value: e.target.value,
                type: 'input'
            });
		}
	},
	data() {
		return {
			activated: this.value !== ''
		}
	},
	computed: {
		validClass() {
			return this.pattern.test(this.value) ? 'bi bi-check-circle-fill' : 'bi bi-exclamation-circle-fill'
		}
	}
}
</script>