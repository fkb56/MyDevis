<template>
	<inertia-link :href="href" :class="classes">
		<slot></slot>
	</inertia-link>
</template>

<script>
export default {
	props: {
		href: String,
		active: Boolean
	},

	computed: {
		classes() {
			return this.active
				? "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline bg-white"
				: "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
		}
	}
}
</script>
