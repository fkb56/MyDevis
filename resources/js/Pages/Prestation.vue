<template>
	<div class="px-5 container mx-auto sm:px-6 lg:px-8">
		<div class="mt-10 mb-6 border-b-2 inline-block border-black mx-auto font-bold text-3xl">Prestations</div>
		<div class="justify-evenly flex">
			<card>
				<template #img>
					<rouleau-de-peinture class="mx-auto mt-8" height="150" width="150" icon-color="#D10000"/>
				</template>
				<template #title>
					<h1 class="text-4xl my-4 text-center font-bold text-gray-800 font-paint">Extérieur</h1>
				</template>
				<template #content>
					<ul class="font-paint font-semibold text-center mt-6">
						<li>Nettoyage</li>
						<li>Ravalement</li>
					</ul>
				</template>
			</card>
			<card>
				<template #img>
					<pinceau class="mx-auto mt-8" height="150" width="150" icon-color="#D10000"/>
				</template>
				<template #title>
					<h1 class="text-4xl my-4 text-center font-bold text-gray-800 font-paint">Intérieur</h1>
				</template>
				<template #content>
					<ul class="font-paint font-semibold text-center">
						<li>Nettoyage</li>
						<li>Peinture</li>
						<li>Tapisserie</li>
					</ul>
				</template>
			</card>
		</div>

		<!--		<cards />-->
	</div>
</template>

<script>
import Cards from '@/Pages/components/Cards/Cards';
import Card from "@/Pages/components/Cards/Card";
import Pinceau from "@/SVG/Pinceau";
import RouleauDePeinture from "@/SVG/RouleauDePeinture";

export default {
	name: "About",
	components: {
		RouleauDePeinture,
		Pinceau,
		Cards,
		Card,
	},
	props: {},
	computed: {},
	methods: {},
	data() {
		return {}
	},
	watch() {
	},
	beforeCreate() {
	},
	created() {
	},
	beforeMount() {
	},
	mounted() {
	},
	beforeUpdate() {
	},
	updated() {
	},
	beforeUnmount() {
	},
	unmounted() {
	},
};
</script>

<style lang="css" scoped>

</style>
