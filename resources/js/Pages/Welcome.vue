<template>
	<Meta :title="'Accueil'"></Meta>
	<Nav class="z-50 top-0" />
	<div>
		<div class="relative">
			<img
				src="../../img/cropped-cropped-header-bg-1024x647-1.jpg"
				alt=""
				class="bg-fixed z-0 md:mt-16"
			/>
			<div
				class="
					m-auto
					bg-red-700
					z-10
					absolute
					opacity-40
					rounded
					sm:w-1/3
					md:w-1/4
					h-24
					text-2xl
					inset-1/3
					xl:w-98 xl:h-48 xl:inset-1/3 xl:text-6xl
					flex
					items-center
					justify-content
				"
			>
				<div
					class="
						font-bold
						tracking-widest
						text-white text-center
						px-4
					"
				>
					JSLS Peinture
				</div>
			</div>
		</div>
		<div class="px-5 container mx-auto sm:px-6 lg:px-8">
			<div>
				<div
					class="
						mt-10
						mb-3
						border-b-2
						inline-block
						border-black
						font-bold
						text-3xl
					"
				>
					A propos
				</div>
				<div class="mt-3 text-justify text-lg">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Labore laboriosam sapiente similique! Aspernatur consectetur
					consequuntur dolorem ea eos est eveniet exercitationem
					magnam modi obcaecati odio, omnis recusandae rem repellat,
					ullam. Lorem ipsum dolor sit amet, consectetur adipisicing
					elit. A assumenda consequuntur cum deserunt dignissimos
					dolores ducimus enim, laboriosam minus modi molestiae omnis
					rerum vitae! Cupiditate doloribus iure officiis qui sed. Ad
					atque autem, consequuntur delectus dolorem dolores enim
					esse, ex exercitationem facere fugit impedit incidunt iste
					itaque laborum nihil odio provident quibusdam saepe sapiente
					sequi, similique tempora voluptates. Fuga, illum!
				</div>
			</div>
		</div>
		<prestation />
	</div>
	<Footer :user="user" />
</template>

<style scoped></style>

<script>
import Meta from "@/Jetstream/Meta";
import Nav from "@/Layouts/Nav";
import Footer from "@/Layouts/Footer";
import Prestation from "@/Pages/Prestation";
import Modal from "@/Jetstream/DialogModal";
import { createInertiaApp } from "@inertiajs/inertia-vue3";

export default {
	components: {
		Modal,
		Prestation,
		Footer,
		Nav,
		Meta,
	},
	props: {
		user: Object,
		canLogin: Boolean,
		canRegister: Boolean,
		showModal: {
			type: Boolean,
			default: false,
		},
	},
	data() {
		return {
			show: false,
		};
	},
	setup() {},
};
</script>
