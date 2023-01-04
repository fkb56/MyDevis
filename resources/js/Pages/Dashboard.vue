<template>
	<div>
		<Meta :title="'Tableau de bord'" />
		<nav-bar>
			<!-- section Main-->
			<main class="overflow-hidden flex-1 p-3 bg-white-300">
				<div class="flex flex-col">
					<!-- section Stats Row Starts Here -->
					<div
						class="
							flex flex-1 flex-col
							md:flex-row
							lg:flex-row
							mx-2
							justify-evenly
						"
					>
						<div
							class="
								shadow
								bg-info
								border-l-8
								hover:bg-info-dark
								border-info-dark
								mb-2
								p-2
								md:w-1/4
								mx-2
							"
						>
							<div @click="sidebar" class="flex flex-col p-4">
								<inertia-link
									:href="route('clients.index')"
									class="text-2xl text-white no-underline"
								>
									{{ count_clients || 0 }}
								</inertia-link>
								<inertia-link
									:href="route('clients.index')"
									class="text-lg text-white no-underline"
								>
									{{
										count_clients > 0
											? "Total clients"
											: "Total client"
									}}
								</inertia-link>
							</div>
						</div>

						<div
							class="
								shadow
								bg-info
								border-l-8
								hover:bg-info-dark
								border-info-dark
								mb-2
								p-2
								md:w-1/4
								mx-2
							"
						>
							<div class="flex flex-col p-4">
								<inertia-link
									:href="route('produits.index')"
									class="text-2xl text-white no-underline"
								>
									{{ count_products || 0 }}
								</inertia-link>
								<inertia-link
									:href="route('produits.index')"
									class="text-lg text-white no-underline"
								>
									Total Produits
								</inertia-link>
							</div>
						</div>
					</div>

					<!-- section Stats Row Ends Here -->

					<!-- section table produits Starts Here -->
					<div
						v-if="products.length > 0"
						class="
							flex flex-1 flex-col
							md:flex-row
							lg:flex-row
							mx-2
						"
					>
						<!-- section card -->

						<div
							class="
								rounded
								overflow-hidden
								shadow
								bg-white
								mx-2
								w-full
								mt-10
							"
						>
							<div class="px-6 py-2 border-b border-light-grey">
								<div class="text-xl font-bold">
									{{
										products.length > 1
											? `${products.length} Produits n'étant plus en stock`
											: `${products.length} Produit n'étant plus en stock`
									}}
								</div>
							</div>
							<div class="table-responsive">
								<table class="table text-grey-darkest">
									<thead
										class="
											bg-grey-dark
											text-white text-normal
										"
									>
										<tr>
											<th scope="col">Nom</th>
											<th scope="col">Référence</th>
											<th scope="col" class="text-center">
												Prix
											</th>
											<th scope="col" class="text-center">
												Quantité
											</th>
										</tr>
									</thead>
									<tbody>
										<tr
											v-for="product in products"
											:key="product.id"
											class="hover:bg-gray-200"
										>
											<td class="">{{ product.name }}</td>
											<td class="">
												{{ product.reference }}
											</td>
											<td class="text-center">
												{{ product.selling_price }}€
											</td>
											<td class="text-center">
												{{ product.quantity }}
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- section end card -->
					</div>
					<!-- section end table client Ends Here -->

					<!-- section Card Section Starts Here -->
					<div
						v-if="clients.length > 0"
						class="
							flex flex-1 flex-col
							md:flex-row
							lg:flex-row
							mx-2
						"
					>
						<!-- section card -->

						<div
							class="
								rounded
								overflow-hidden
								shadow
								bg-white
								mx-2
								w-full
								mt-10
							"
						>
							<div class="px-6 py-2 border-b border-light-grey">
								<div class="text-xl font-bold">
									{{
										count_clients > 0
											? `${clients.length} Derniers clients ajoutés`
											: `${clients.length}  Dernier client ajouté`
									}}
								</div>
							</div>
							<div class="table-responsive">
								<table class="table text-grey-darkest">
									<thead
										class="
											bg-grey-dark
											text-white text-normal
										"
									>
										<tr>
											<th scope="col">Nom</th>
											<th scope="col">Prénom</th>
											<th scope="col" class="text-center">
												Adresse
											</th>
											<th scope="col" class="text-center">
												Numéro de téléphone
											</th>
										</tr>
									</thead>

									<tbody>
										<tr
											v-for="client in clients"
											:key="client.id"
											class="hover:bg-gray-200"
										>
											<td>{{ client.last_name }}</td>
											<td>{{ client.first_name }}</td>
											<td class="text-center">
												{{
													`${client.street_number} ${client.street}, ${client.post_code} ${client.city} `
												}}
											</td>
											<td class="text-center">
												<a
													:href="`tel:${client.phone}`"
													>{{ client.phone }}</a
												>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- section end card -->
					</div>
					<!-- section Cards Section Ends Here -->
				</div>
			</main>
			<!-- section end Main-->
		</nav-bar>
	</div>
</template>

<script>
import Welcome from "@/Jetstream/Welcome";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import NavBar from "@/Layouts/NavBar";
import Meta from "@/Jetstream/Meta";
// import {Head} from '@inertiajs/inertia-vue3'

export default {
	components: {
		NavBar,
		Welcome,
		JetDropdownLink,
		// Head,
		Meta,
	},
	props: {
		products: Array,
		count_products: Number,
		clients: Array,
		count_clients: Number,
	},
	computed: {},
	data() {
		return {
			stock_product: null,
		};
	},
};
</script>

<style></style>
