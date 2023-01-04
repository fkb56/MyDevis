<template id="hasModal">
	<div>

		<div v-if="openModal" @click="handleBackdropClick" id="backdrop"
			 class="min-w-screen h-screen animated fadeIn faster w-1/2 fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none"
			 ref="backdrop">
			<div class="relative w-full my-6 mx-auto max-w-6xl">

				<!-- section showMode-->
				<div v-show="showModes" class="relative p-6 flex-auto">
					<div>
						<div
							class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
							<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
							<div class="relative min-h-screen flex flex-col items-center justify-center ">
								<div>
									<div class="flex flex-col">
										<div class="bg-white shadow-md  rounded-3xl p-4">
											<div class="flex-none lg:flex">
												<div @click="close"><i class="fas fa-times"></i></div>
												<div v-if="hasImg"
													 class=" h-full w-full lg:h-48 lg:w-48 lg:mb-0 mb-3">
													<img
														:src="imgLink"
														alt=""
														class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
												</div>
												<div class="flex-auto ml-3 justify-evenly py-2 text-center">
													<div class="flex-row">
														<div class="flex flex-wrap mt-4">
															<div class="w-full text-xs text-blue-700 font-medium ">
																Nom
															</div>
															<div class="flex flex-row mx-auto">
																<h2 class="text-2xl font-medium">
																	{{ item.last_name }}
																</h2>
															</div>

														</div>
														<div class="flex flex-wrap mt-4">
															<div class="w-full text-xs text-blue-700 font-medium ">
																Prénom
															</div>
															<div class="flex flex-row mx-auto">
																<h2 class="text-2xl font-medium">
																	{{ item.first_name }}
																</h2>
															</div>
														</div>
													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															Adresse
														</div>
														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																{{ item.street_number + ' ' + item.street }} <br>
																{{ item.post_code + ' ' + item.city }}
															</h2>
														</div>
													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															Téléphone
														</div>

														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																<a :href="`tel:${item.phone}`">{{ item.phone }}</a>
															</h2>
														</div>

													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															Email
														</div>

														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																<a :href="`mailto:${item.email}`">{{ item.email }}</a>
															</h2>
														</div>

													</div>
													<p class="mt-3"></p>
													<div class="flex py-4 text-sm text-gray-600">
														<div class="flex-1 inline-flex items-center">
															<svg xmlns="http://www.w3.org/2000/svg"
																 class="h-5 w-5 mr-2" fill="none"
																 viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round"
																	  stroke-width="2"
																	  class="mx-auto"
																	  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
															</svg>
															<p>{{ date }}</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- section editModes -->
				<div v-show="editModes" class="relative p-6 flex-auto">
					<div>
						<div
							class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
							<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
							<div class="relative min-h-screen flex flex-col items-center justify-center ">
								<div>
									<div class="flex flex-col">
										<div class="bg-white shadow-md  rounded-3xl p-4">
											<div class="flex-none lg:flex">
												<form @submit.prevent="submit">
													<div @click="close"><i class="fas fa-times"></i></div>
													<div v-if="hasImg"
														 class=" h-full w-full lg:h-48 lg:w-48 lg:mb-0 mb-3">
														<img
															@click="close"
															:src="imgLink"
															alt=""
															class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
													</div>
													<div class="flex-auto ml-3 justify-evenly py-2 text-center">
														<div class="flex-row">
															<div class="flex flex-wrap mt-4">
																<div class="flex flex-row mx-auto w-full">
																	<select
																		class="form-select text-center py-1 px-11 mx-auto border-none flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200">

																		<option
																			selected
																		>
																			{{ item.civility.name_min }}
																		</option>

																		<option
																			v-for="option in item1"
																			:key="option.id"
																		>
																			{{ option.name_min }}
																		</option>

																	</select>
																</div>
															</div>
														</div>
														<div class="flex-row">
															<div class="flex flex-wrap mt-4">
																<div class="w-full text-xs text-blue-700 font-medium ">
																	Nom
																</div>
																<div class="flex flex-row mx-auto">
																	<input
																		class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																		v-model="item.last_name">
																</div>

															</div>
															<div
																class="flex flex-wrap mt-4">
																<div

																	class="w-full text-xs text-blue-700 font-medium ">
																	Prénom
																</div>
																<div class="flex flex-row mx-auto">
																	<input
																		class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																		v-model="item.first_name">
																</div>
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Numéro de rue
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="item.street_number">
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Rue
															</div>

															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="item.street">
															</div>

														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Code postal
															</div>

															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="item.post_code">
															</div>

														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Ville
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="item.city">
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Téléphone
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="item.phone">
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Email
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="item.email">
															</div>
														</div>
														<p class="mt-3"></p>
														<div class="flex p-4 pb-2 border-t border-gray-200 "></div>
														<div class="flex space-x-3 text-sm font-medium">
															<button
																class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800 flex-auto"
																type="submit" aria-label="like" @click="idItem">
																{{ titleButton }}
															</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- section createModes -->
				<div v-show="createModes" class="relative p-6 flex-auto">
					<div>
						<div
							class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
							<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
							<div class="relative min-h-screen flex flex-col items-center justify-center ">
								<div>
									<div class="flex flex-col">
										<div class="bg-white shadow-md  rounded-3xl p-4">
											<div class="flex-none lg:flex">
												<form @submit.prevent="submit">
													<div @click="close"><i class="fas fa-times"></i></div>
													<div v-if="hasImg"
														 class=" h-full w-full lg:h-48 lg:w-48 lg:mb-0 mb-3">
														<img
															@click="close"
															:src="imgLink"
															alt=""
															class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
													</div>
													<div class="flex-auto ml-3 justify-evenly py-2 text-center">
														<div class="flex-row">
															<div class="flex flex-wrap mt-4">
																<div class="flex flex-row mx-auto w-full">
																	<select
																		class="form-select text-center py-1 px-11 mx-auto border-none flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200">

																		<option
																			v-for="option in item1"
																			:key="option.id"
																		>
																			{{ option.name_min }}
																		</option>

																	</select>
																</div>
															</div>
														</div>
														<div class="flex-row">
															<div class="flex flex-wrap mt-4">
																<div class="w-full text-xs text-blue-700 font-medium ">
																	Nom
																</div>
																<div class="flex flex-row mx-auto">
																	<input
																		class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																		v-model="form.last_name">
																</div>

															</div>

															<div v-if="form.errors.last_name">
																hjhds
															</div>
															<div
																class="flex flex-wrap mt-4">
																<div

																	class="w-full text-xs text-blue-700 font-medium ">
																	Prénom
																</div>
																<div class="flex flex-row mx-auto">
																	<input
																		class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																		v-model="form.first_name">
																</div>
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Numéro de rue
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.street_number">
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Rue
															</div>

															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.street">
															</div>

														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Code postal
															</div>

															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.post_code">
															</div>

														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Ville
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.city">
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Téléphone
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.phone">
															</div>
														</div>
														<div class="flex flex-wrap mt-4">
															<div
																class="w-full flex-none text-xs text-blue-700 font-medium ">
																Email
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.email">
															</div>
														</div>
														<p class="mt-3"></p>
														<div class="flex p-4 pb-2 border-t border-gray-200 "></div>
														<div class="flex space-x-3 text-sm font-medium">
															<button
																class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800 flex-auto"
																type="submit" aria-label="like" @click="idItem">
																{{ titleButton }}
															</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</template>

<script>
import moment from "moment";
import {useForm} from "@inertiajs/inertia-vue3";

export default {
	name: "Modal",
	props: {
		item: {
			type: Object
		},
		title: {
			type: String,
			default: "Title"
		},
		label1: {
			type: String,
			default: "Nom"
		},
		label2: {
			type: String,
			default: "Quantité"
		},
		label3: {
			type: String,
			default: "Référence"
		},
		label4: {
			type: String,
			default: "Prix d'achat"
		},
		label5: {
			type: String,
			default: "Prix de vente"
		},
		label6: {
			type: String,
			default: "Catégorie"
		},
		label7: {
			type: String,
			default: "Unité de mesure"
		},
		label_date: {
			type: String,
			default: "Date"
		},
		value_id: {
			type: Number
		},
		value1: {
			type: String,
			default: "Outils 1"
		},
		value2: {
			type: String,
			default: '10'
		},
		value3: {
			type: String,
			default: "hgjhjgjhbjk"
		},
		value4: {
			type: String,
			default: "10"
		},
		value5: {
			type: String,
			default: "20"
		},
		value6: {
			type: String,
			default: "Murs"
		},
		value7: {
			type: String,
			default: "pcs"
		},
		item1: {
			type: Array
		},
		item2: {
			type: Array
		},
		value_date: {
			type: String,
			default: "16-08-2021"
		},
		hasImg: {
			type: Boolean,
			default: false
		},
		imgLink: {
			type: String,
			default: "https://images.unsplash.com/photo-1622180203374-9524a54b734d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
		},
		editModes: {
			type: Boolean,
			default: false
		},
		createModes: {
			type: Boolean,
			default: true
		},
		showModes: {
			type: Boolean,
			default: false
		},
		openModal: {
			type: Boolean,
			default: true
		},
		closeModal: {
			type: Boolean,
			default: false
		}
	},
	computed: {
		date: function () {
			moment.locale('fr')
			return moment(this.value_date).format('D MMMM YYYY H:mm')
		},
		titleButton: function () {
			if (this.editModes) {
				return "Modifier"
			}
			if (this.createModes) {
				return "Créer"
			}
		},
		idItem: function () {
			for (const option of this.item1) {
				console.log('fr')
				console.log(option)
				// if (option.name_min === this.form.civility_name || option.name_min === this.edit.civility_name) {
				// 	this.form.civility_id = option.id
				// 	this.edit.civility_id = option.id
				// }
			}

			// for (const option of this.item2) {
			// 	if (option.name_full === this.form.measure_unit_name || option.name_full === this.edit.measure_unit_name) {
			// 		this.form.measure_unit_id = option.id
			// 		this.edit.measure_unit_id = option.id
			// 		console.log('option')
			// 		console.log(this.edit.measure_unit_id)
			// 	}
			// }
		}
	},
	data() {
		return {}
	},
	methods: {
		close: function () {
			this.$emit('close')
		},
		// section toggle modal
		toggleModal: function () {
			this.showModal = !this.showModal;
		},
		// section close modal
		//fonction permettant de fermer la modal quand un click est effectuer en dehors de l'id "backdrop"
		handleBackdropClick(e) {
			if (e.target.id === "backdrop") {
				this.showModal = false
			}
		},
		submit: function (e) {
			this.$emit('reset')

			if (this.createModes) {
				this.form.submit('post', '/clients')
				this.form.reset()
			}

			if (this.editModes) {
				this.edit.id = this.item.id
				this.edit.civility_id = this.item.civility_id
				this.edit.civility_name = this.item.civility_name
				this.edit.first_name = this.item.first_name
				this.edit.last_name = this.item.last_name
				this.edit.phone = this.item.phone
				this.edit.email = this.item.email
				this.edit.street_number = this.item.street_number
				this.edit.street = this.item.street
				this.edit.post_code = this.item.post_code
				this.edit.city = this.item.city
				this.edit.submit('put', `/clients/${this.value_id}`)
			}

			this.close()
		}
		,
	},
	mounted: function () {
		// section close modal
		//fonction permettant de fermer la modal quand le bouton echap est pressé
		document.addEventListener("keydown", (e) => {
			if (this.showModal && e.keyCode === 27) {
				this.close()
			}
		});

		// if (this.editModes) {
		// 	this.edit.id = this.value_id
		// 	this.edit.name = this.value1
		// 	this.edit.quantity = this.value2
		// 	this.edit.reference = this.value3
		// 	this.edit.buying_price = this.value4
		// 	this.edit.selling_price = this.value5
		// 	this.edit.category_id = null
		// 	this.edit.category_name = this.value7
		// 	this.edit.measure_unit_id = null
		// 	this.edit.measure_unit_name = this.value7
		// }

	},
	setup() {
		const form = useForm({
			civility_id: null,
			civility_name: null,
			first_name: null,
			last_name: null,
			phone: null,
			street_number: null,
			street: null,
			city: null,
			post_code: null,
			email: null,
		})

		const edit = useForm({
			id: null,
			civility_id: null,
			civility_name: null,
			first_name: null,
			last_name: null,
			phone: null,
			street_number: null,
			street: null,
			city: null,
			post_code: null,
			email: null,
		})

		return {form, edit}
	},
}
</script>