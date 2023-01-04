<template>
	<!--Sidebar-->
	<aside
		v-show="sidebarToggle"
		class="
			w-1/2
			md:w-1/6
			lg:w-1/6
			border-r border-side-nav
			md:block
			lg:block
		"
	>
		<ul class="list-reset flex flex-col">
			<li
				class="
					w-full
					h-full
					py-3
					px-2
					border-b border-light-border
					bg-white
				"
			>
				<!--				<inertia-link :href="route('dashboard')"-->
				<inertia-link
					:href="'/'"
					class="
						font-sans font-hairline
						hover:font-normal
						text-sm text-nav-item
						no-underline
					"
				>
					<!--					<i class="fas fa-tachometer-alt float-left mx-2"></i>-->
					Dashboard
					<!--					<span><i class="fas fa-angle-right float-right"></i></span>-->
				</inertia-link>
			</li>
			<li class="w-full h-full py-3 px-2 border-b border-light-border">
				<inertia-link
					:href="route('devis.index')"
					class="
						font-sans font-hairline
						hover:font-normal
						text-sm text-nav-item
						no-underline
					"
				>
					<i class="fab fa-wpforms float-left mx-2"></i>
					Devis
					<span><i class="fa fa-angle-right float-right"></i></span>
				</inertia-link>
			</li>
			<li class="w-full h-full py-3 px-2 border-b border-light-border">
				<inertia-link
					:href="route('produits.index')"
					class="
						font-sans font-hairline
						hover:font-normal
						text-sm text-nav-item
						no-underline
					"
				>
					<i class="fas fa-grip-horizontal float-left mx-2"></i>
					Produits
					<span><i class="fa fa-angle-right float-right"></i></span>
				</inertia-link>
			</li>
			<li class="w-full h-full py-3 px-2 border-b border-light-border">
				<inertia-link
					:href="route('categorie.index')"
					class="
						font-sans font-hairline
						hover:font-normal
						text-sm text-nav-item
						no-underline
					"
				>
					<i class="fas fa-table float-left mx-2"></i>
					Catégorie
					<span><i class="fa fa-angle-right float-right"></i></span>
				</inertia-link>
			</li>
			<li class="w-full h-full py-3 px-2 border-b border-light-border">
				<inertia-link
					:href="route('factures.index')"
					class="
						font-sans font-hairline
						hover:font-normal
						text-sm text-nav-item
						no-underline
					"
				>
					<i class="fab fa-uikit float-left mx-2"></i>
					Facture
					<span><i class="fa fa-angle-right float-right"></i></span>
				</inertia-link>
			</li>
			<li class="w-full h-full py-3 px-2 border-b border-300-border">
				<inertia-link
					:href="route('clients.index')"
					class="
						font-sans font-hairline
						hover:font-normal
						text-sm text-nav-item
						no-underline
					"
				>
					<i class="fas fa-square-full float-left mx-2"></i>
					Clients
					<span><i class="fa fa-angle-right float-right"></i></span>
				</inertia-link>
			</li>
		</ul>
	</aside>
	<!--/Sidebar-->
</template>

<script>
import JetDropdownLink from "@/Jetstream/DropdownLink";

export default {
	name: "SideBar",
	components: {
		JetDropdownLink,
	},
	props: {
		profileToggle: {
			type: Boolean,
			default: false,
		},
	},
	computed: {},
	data() {
		return {
			sidebar: false,
		};
	},
	methods: {
		logout() {
			this.$inertia.post(route("logout"));
		},
		sidebarToggle() {
			this.$emit("sidebar", (this.sidebar = !this.sidebar));
		},
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
