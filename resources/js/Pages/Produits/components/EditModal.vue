<template>
  <!-- section editModes -->
	<div>
		<form @submit.prevent="submit">
			<div @click="$emit('close')" class="ml-3 mt-3"><i class="fas fa-times"></i></div>
			<!--			<div v-if="hasImg"-->
			<!--				 class=" h-full w-full lg:h-48 lg:w-48 lg:mb-0 mb-3">-->
			<!--				<img-->
			<!--						@click="close"-->
			<!--						:src="imgLink"-->
			<!--						alt=""-->
			<!--						class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">-->
			<!--			</div>-->
			<div class="flex-auto mx-3 justify-evenly pb-2 text-center">
				<div class="flex-row">
					<div class="flex flex-wrap">
						<div class="w-full text-xs text-blue-700 font-medium ">
							Nom
						</div>
						<div class="flex flex-row mx-auto">
							<input
									class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
									v-model="form.name">
						</div>

					</div>
					<div
							class="flex flex-wrap mt-4">
						<div

								class="w-full text-xs text-blue-700 font-medium ">
							Quantité
						</div>
						<div class="flex flex-row mx-auto">
							<input
									class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
									v-model="form.quantity">
						</div>
					</div>
				</div>
				<div class="flex flex-wrap mt-4">
					<div
							class="w-full flex-none text-xs text-blue-700 font-medium ">
						Référence
					</div>
					<div class="flex flex-row mx-auto">
						<input
								class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
								v-model="form.reference">
					</div>
				</div>
				<div class="flex flex-wrap mt-4">
					<div
							class="w-full flex-none text-xs text-blue-700 font-medium ">
						Prix d'achat
					</div>

					<div class="flex flex-row mx-auto">
						<input
								class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
								v-model="form.buying_price">
						<span
								class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker">€</span>
					</div>

				</div>
				<div class="flex flex-wrap mt-4">
					<div
							class="w-full flex-none text-xs text-blue-700 font-medium ">
						Prix de vente
					</div>

					<div class="flex flex-row mx-auto">
						<input
								class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
								v-model="form.selling_price">
						<span
								class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker">€</span>
					</div>

				</div>
				<div class="flex flex-wrap mt-4">
					<div
							class="w-full flex-none text-xs text-blue-700 font-medium ">
						Catégorie
					</div>
					<div class="flex flex-row mx-auto">
						<select
								v-model="form.category_name"
								class="form-select text-center py-1 px-11 mx-auto border-none flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200">

							<option
									v-for="option in categories"
									:key="option.id"
							>
								{{ option.name }}
							</option>

						</select>
					</div>
				</div>
				<div class="flex flex-wrap mt-4">
					<div
							class="w-full flex-none text-xs text-blue-700 font-medium ">
						Unité de mesure
					</div>
					<div class="flex flex-row mx-auto">
						<select
								v-model="form.measure_unit_name"
								class="form-select text-center py-1 px-11 mx-auto border-none flex-auto text-lg font-medium capitalize focus:outline-none border-b-2 border-gray-200">

							<option
									v-for="option in measure_units"
									:key="option.id"
							>
								{{ option.name_full }}
							</option>


						</select>
					</div>
				</div>
				<p class="mt-3"></p>
				<div class="flex space-x-3 text-sm font-medium">
					<button
							class="mb-3 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800 flex-auto"
							type="submit" aria-label="like" @click="idItem">
						Modifier le produit
					</button>
				</div>
			</div>
		</form>
	</div>
</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";

export default {
	name: 'Showmodal',
	props: {
		item: Object,
		category: String,
		categories: Array,
		measure_unit: String,
		measure_units: Array,
		value_date: String
	},
	computed: {
		idItem: function () {
			if (this.form.quantity === null) {
			}

			for (const option of this.categories) {
				console.log(this.categories)
				if (option.name === this.form.category_name || option.name === this.form.category_name) {
					this.form.category_id = option.id
				}
			}

			for (const option of this.measure_units) {
				if (option.name_full === this.form.measure_unit_name || option.name_full === this.form.measure_unit_name) {
					this.form.measure_unit_id = option.id
					console.log('option')
					console.log(this.form.measure_unit_id)
				}
			}
		}
	},
	methods: {
		close: function () {
			this.$emit('close')
		},
		submit: function (e) {
			this.$emit('reset')

			this.form.id = this.item.id
			this.idItem
			this.form.put( `/produits/${this.item.id}`, {
				onSuccess: () => this.close()
			})

			if (this.form.wasSuccessful) {
				this.close()
			}
		},
	},
	setup() {
		const form = useForm({
			id: null,
			name: null,
			quantity: null,
			reference: null,
			buying_price: null,
			selling_price: null,
			category_id: null,
			category_name: null,
			measure_unit_id: null,
			measure_unit_name: null,
		})

		return {form}
	},
	mounted() {
		this.form.id = this.item.id
		this.form.name = this.item.name
		this.form.quantity = this.item.quantity
		this.form.reference = this.item.reference
		this.form.buying_price = this.item.buying_price
		this.form.selling_price = this.item.selling_price
		this.form.category_name = this.item.category.name
		this.form.measure_unit_name = this.item.measure_unit.name_full
	}
};
</script>
