<template id="hasModal">
	<div>

		<div v-show="openModal" @click="handleBackdropClick" id="backdrop"
			 class="min-w-screen h-screen animated fadeIn faster w-1/2 fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none"
			 ref="backdrop">
			<div class="relative w-full my-6 mx-auto max-w-6xl">

				<!-- section showMode-->
				<div v-show="showModes" class="relative p-6 flex-auto">
					<div>
						<div
							class="min-w-screen h-screen animated fadeIn faster fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
							<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
							<div class="relative min-h-screen flex flex-col items-center justify-center ">
								<div>
									<div class="flex flex-col">
										<div class="bg-white shadow-md  rounded-3xl p-4  pr-10">
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
																{{ label1 }}
															</div>
															<div class="flex flex-row mx-auto">
																<h2 class="text-2xl font-medium">
																	{{ value1 }}
																</h2>
															</div>

														</div>
													</div>
													<div
														class="flex p-4 pb-2 border-t border-gray-200 "></div>
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
																<div
																	class="w-full text-xs text-blue-700 font-medium ">
																	{{ label1 }}
																</div>
																<div class="flex flex-row mx-auto">
																	<input
																		class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																		:value="value1"
																		@input="value1 = $event.target.value"
																		>
																</div>

															</div>
														</div>
														<p class="mt-3"></p>
														<div v-show="showModes"
															 class="flex py-4  text-sm text-gray-600">
															<div class="flex-1 inline-flex items-center">
																<svg xmlns="http://www.w3.org/2000/svg"
																	 class="h-5 w-5 mr-2" fill="none"
																	 viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round"
																		  stroke-linejoin="round"
																		  stroke-width="2"
																		  class="mx-auto"
																		  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
																</svg>
																<p>{{ value_date }}</p>
															</div>
														</div>
														<div class="flex space-x-3 text-sm font-medium">
															<button
																class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800 flex-auto"
																type="submit" aria-label="like">{{ titleButton }}
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
											<form @submit.prevent="submit" :name="name">
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
															<div
																class="w-full text-xs text-blue-700 font-medium ">
																{{ label1 }}
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center"
																	v-model="form.name">
															</div>

															<!--																<div v-if="$attrs.errors.name" class="alert alert-danger text-center text-red-600">-->
															<!--																	{{ $attrs.errors.name }}-->
															<!--																</div>-->

														</div>
														<p class="mt-3"></p>
													</div>
													<div class="flex space-x-3 text-sm font-medium">
														<button
															class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800 flex-auto"
															type="submit"
															aria-label="like"
														>
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
</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";

export default {
	name: "Modal",
	props: {
		name:{type:String},
		label1: {
			type: String,
			default: "Nom"
		},
		value_id: {
			type: Number
		},
		value1: {
			type: String,
			default: "Outils 1"
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
			default: false
		},
		showModes: {
			type: Boolean,
			default: false
		},
		openModal: {
			type: Boolean,
			default: false
		},
		closeModal: {
			type: Boolean,
			default: false
		}
	},
	computed: {
		// product: function () {
		// 	return this.item
		// },
		titleButton: function () {
			if (this.editModes) {
				return "Modifier"
			}
			if (this.createModes) {
				return "Créer"
			}
		},
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
				this.close()
			}
		},
		submit: function (e) {
			this.$emit('reset')

			if (this.createModes) {
				this.form.submit('post', '/categorie')
				this.form.reset()
			}

			if (this.editModes) {
				this.edit.id = this.value_id
				this.edit.name = this.value1
				console.log('test')
				this.edit.submit('put', `/categorie/${this.value_id}`)
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
	},
	setup() {
		const form = useForm({
			name: null,
		})

		const edit = useForm({
			id: null,
			name: null,
		})

		return {form, edit}
	},
}
</script>

