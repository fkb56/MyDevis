<template>
	<div class="items-center w-full md:fixed">
		<div
			class="
				bg-white
				border
				transition
				duration-500
				ease-in-out
				transform
				text-blueGray-700
			"
		>
			<div
				class="
					flex flex-row flex-wrap
					justify-between
					items-center
					p-5
					mx-auto
					md:flex-row
				"
			>
				<nav
					class="flex flex-wrap justify-start items-center text-base"
				>
					<ul
						class="
							inline-block
							items-center
							list-none
							lg:inline-flex
						"
					>
						<li>
							<!-- TODO enlever hover du boutton contact -->
							<a
								href="/contact"
								class="
									py-1
									m-1
									text-base
									rounded-md
									ring-offset-2 ring-offset-current
									transition
									duration-500
									ease-in-out
									transform
									text-blueGray-500
									focus:shadow-outline
									focus:outline-none
									focus:ring-2
									hover:text-black
								"
								>Contact</a
							>
						</li>
					</ul>
				</nav>
				<Link
					href="/"
					class="
						justify-center
						focus:outline-none
						md:ml-auto md:mr-auto
					"
				>
					<div class="inline-flex items-center">
						<div
							class="
								p-2
								mr-2
								w-2
								h-2
								bg-gradient-to-tr
								from-red-400
								to-red-600
								rounded-full
							"
						></div>
						<h2
							class="
								block
								p-2
								text-xl
								font-medium
								tracking-tighter
								text-black
								transition
								duration-500
								ease-in-out
								transform
								cursor-pointer
								hover:text-blueGray-500
								lg:text-x lg:mr-8
							"
						>
							JSLS Peinture
						</h2>
					</div>
				</Link>
				<Link :href="route('login')">
					<i class="far fa-user"></i>
				</Link>
			</div>
		</div>
	</div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
	name: "Nav",
	components: {
		Link
	},
	props: {},
	computed: {},
	methods: {},
	data() {
		return {};
	},
	watch() {},
	beforeCreate() {},
	created() {},
	beforeMount() {},
	mounted() {},
	beforeUpdate() {},
	updated() {},
	beforeUnmount() {},
	unmounted() {},
};
</script>

<style lang="css" scoped></style>
