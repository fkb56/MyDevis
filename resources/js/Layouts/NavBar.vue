<template>
	<!--Container -->
	<div class="mx-auto bg-gray-100">
		<!--Screen-->

		<div class="min-h-screen flex flex-col">
			<!--Header Section Starts Here-->
			<header class="bg-gray-600 w-full">
				<div class="flex justify-between">
					<div class="p-1 mx-3 inline-flex items-center">
						<i class="fas fa-bars pr-2 text-white cursor-pointer"
						   @click="sidebarToggler"></i>
						<inertia-link href="/" class="text-white p-2">My devis</inertia-link>
					</div>
					<div class="p-1 flex flex-row items-center">
						<img @click="profileToggle = !profileToggle" class="inline-block h-8 w-8 rounded-full"
							 src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
						<inertia-link href="#" @click="profileToggle = !profileToggle"
									  class="text-white p-2 no-underline hidden md:block lg:block">
<!--							 {{ `${user.name} ${user.last_name}` }}-->
						</inertia-link>
						<div v-show="profileToggle" id="profileToggle"
							 class="rounded shadow-md bg-white absolute mr-1 top-12 right-4">
							<ul class="list-reset">
								<li>
									<inertia-link :href="route('profile.show')"
												  class="no-underline px-4 py-2 block text-black hover:bg-grey-light">
										Réglage
									</inertia-link>
								</li>
								<li>
									<hr class="border-t mx-2 border-grey-light">
								</li>


								<li>
									<form @submit.prevent="logout">
										<jet-dropdown-link as="button">
											Déconnexion
										</jet-dropdown-link>
									</form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!--/Header-->

			<div class="flex flex-1">

				<!--Sidebar-->
				<aside
					v-show="sidebar"
					class="w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav md:block lg:block"
				>

					<ul class="list-reset flex flex-col">
						<li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
							<inertia-link :href="route('dashboard')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-tachometer-alt float-left mx-2"></i>
								Dashboard
								<span><i class="fas fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-light-border">
							<inertia-link :href="route('produits.index')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-grip-horizontal float-left mx-2"></i>
								Produits
								<span><i class="fa fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-light-border">
							<inertia-link :href="route('categorie.index')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-table float-left mx-2"></i>
								Catégorie
								<span><i class="fa fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-300-border">
							<inertia-link :href="route('clients.index')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-square-full float-left mx-2"></i>
								Clients
								<span><i class="fa fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-300-border">
							<inertia-link :href="route('devis.index')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-square-full float-left mx-2"></i>
								Devis
								<span><i class="fa fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-300-border">
							<inertia-link :href="route('factures.index')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-square-full float-left mx-2"></i>
								Factures
								<span><i class="fa fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-300-border">
							<inertia-link :href="route('stocks.index')"
										  class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
								<i class="fas fa-square-full float-left mx-2"></i>
								Stocks
								<span><i class="fa fa-angle-right float-right"></i></span>
							</inertia-link>
						</li>
					</ul>
				</aside>

				<!--/Sidebar-->


				<!-- section Page Content -->
				<main class="w-full">
					<slot></slot>
				</main>

			</div>
		</div>
	</div>
</template>

<script>
import JetDropdownLink from '@/Jetstream/DropdownLink'

export default {
	name: "NavBar",
	components: {
		JetDropdownLink,
	},
	props: {
		sidebarToggle: {
			type: Boolean,
			default: false,
		},
		profileToggle: {
			type: Boolean,
			default: false,
		},
	},
	computed: {},
	data() {
		return {
			sidebar: false
		}
	},
	methods: {
		logout() {
			this.$inertia.post(route('logout'));
		},
		sidebarToggler() {
			this.sidebar = !this.sidebar
		},
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
