<template id="hasModal">
	<div>

		<div v-if="openModal" @click="handleBackdropClick" id="backdrop"
			 class="min-w-screen h-screen animated fadeIn faster w-1/2 fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none"
			 ref="backdrop">
			<div class="relative w-full my-6 mx-auto max-w-6xl">

				<!-- section showMode-->
				<div v-show="showMode" class="relative p-6 flex-auto">
					<div>
						<div
							class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
							<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
							<div class="relative min-h-screen flex flex-col items-center justify-center ">
								<div>
									<div class="flex flex-col">
										<div class="bg-white shadow-md  rounded-3xl p-4">
											<div class="flex-none lg:flex">
												<div @click="openModal = !openModal"><i class="fas fa-times"></i></div>
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
														<div v-show="editMode || createMode"
															 class="flex flex-wrap mt-4">
															<div

																class="w-full text-xs text-blue-700 font-medium ">
																{{ label2 }}
															</div>
															<div class="flex flex-row mx-auto">
																<h2 class="text-2xl font-medium">
																	{{ value2 }}
																</h2>
															</div>
														</div>
													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label3 }}
														</div>
														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																{{ value3 }}
															</h2>
														</div>
													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label4 }}
														</div>

														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																{{ value4 }}???
															</h2>
														</div>

													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label5 }}
														</div>

														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																{{ value5 }}???
															</h2>
														</div>

													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label6 }}
														</div>
														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																{{ value6 }}
															</h2>
														</div>
													</div>
													<div v-show="editMode || createMode" class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label7 }}
														</div>
														<div class="flex flex-row mx-auto">
															<h2 class="text-2xl font-medium">
																{{ value7 }}
															</h2>
														</div>
													</div>
													<p class="mt-3"></p>
													<div v-show="showMode" class="flex py-4  text-sm text-gray-600">
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
													<div v-show="showMode"
														 class="flex p-4 pb-2 border-t border-gray-200 "></div>
													<div class="flex space-x-3 text-sm font-medium">
														<div v-show="showMode" class="flex-auto flex space-x-3">
															<button
																class="mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 ">
                                    <span :class="hasStock">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="shopify"
											 class="svg-inline--fa fa-shopify  w-full h-5  " role="img"
											 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
												  d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z">
                                            </path>
                                        </svg>
                                    </span>
																<span>{{ `${value2} ${value7}` }}</span>
															</button>
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

				<!-- section createMode -->
				<div v-show="createMode" class="relative p-6 flex-auto">
					<div>
						<div
							class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
							<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
							<div class="relative min-h-screen flex flex-col items-center justify-center ">
								<div>
									<div class="flex flex-col">
										<div class="bg-white shadow-md  rounded-3xl p-4">
											<div class="flex-none lg:flex">
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
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
															</div>

														</div>
														<div v-show="editMode || createMode"
															 class="flex flex-wrap mt-4">
															<div

																class="w-full text-xs text-blue-700 font-medium ">
																{{ label2 }}
															</div>
															<div class="flex flex-row mx-auto">
																<input
																	class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
															</div>
														</div>
													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label3 }}
														</div>
														<div class="flex flex-row mx-auto">
															<input
																class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
														</div>
													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label4 }}
														</div>

														<div class="flex flex-row mx-auto">
															<input
																class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
															<span
																class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker">???</span>
														</div>

													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label5 }}
														</div>

														<div class="flex flex-row mx-auto">
															<input
																class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
															<span
																class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker">???</span>
														</div>

													</div>
													<div class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label6 }}
														</div>
														<div class="flex flex-row mx-auto">
															<input
																class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
														</div>
													</div>
													<div v-show="editMode || createMode" class="flex flex-wrap mt-4">
														<div
															class="w-full flex-none text-xs text-blue-700 font-medium ">
															{{ label7 }}
														</div>
														<div class="flex flex-row mx-auto">
															<input
																class="flex-auto text-lg font-medium focus:outline-none border-b-2 border-gray-200 text-center">
														</div>
													</div>
													<p class="mt-3"></p>
													<div v-show="showMode" class="flex py-4  text-sm text-gray-600">
														<div class="flex-1 inline-flex items-center">
															<svg xmlns="http://www.w3.org/2000/svg"
																 class="h-5 w-5 mr-2" fill="none"
																 viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round"
																	  stroke-width="2"
																	  class="mx-auto"
																	  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
															</svg>
															<p>{{ value_date }}</p>
														</div>
													</div>
													<div v-show="showMode"
														 class="flex p-4 pb-2 border-t border-gray-200 "></div>
													<div class="flex space-x-3 text-sm font-medium">
														<div v-show="showMode" class="flex-auto flex space-x-3">
															<button
																class="mb-2 md:mb-0 bg-white px-5 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100 inline-flex items-center space-x-2 ">
                                    <span :class="hasStock">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="shopify"
											 class="svg-inline--fa fa-shopify  w-5 h-5  " role="img"
											 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
												  d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z">
                                            </path>
                                        </svg>
                                    </span>
																<span>{{ `${value2} ${value7}` }}</span>
															</button>
														</div>
														<button v-show="!showMode"
																class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800 flex-auto"
																type="button" aria-label="like">{{ titleButton }}
														</button>
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
		</div>
	</div>
	<div v-if="openModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
</template>

<script>
import moment from "moment";

export default {
	name: "large-modal",
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
			default: "Quantit??"
		},
		label3: {
			type: String,
			default: "R??f??rence"
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
			default: "Cat??gorie"
		},
		label7: {
			type: String,
			default: "Unit?? de mesure"
		},
		label_date: {
			type: String,
			default: "Date"
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
		editMode: {
			type: Boolean,
			default: false
		},
		createMode: {
			type: Boolean,
			default: false
		},
		showMode: {
			type: Boolean,
			default: false
		},
		openModal: {
			type: Boolean,
			default: false
		}
	},
	computed: {
		product: function () {
			return this.item
		},
		hasStock: function () {
			if (this.value2 === 0 || this.value2 === '0') {
				return "text-red-500 hover:text-red-700 rounded-lg focus:outline-none cursor-default"
			} else {
				return "text-green-400 hover:text-green-500 rounded-lg focus:outline-none cursor-default"
			}
		},
		date() {
			moment.locale('fr')
			return moment(this.value_date).format('D MMMM YYYY H:mm')
		}
	},
	data() {
		return {
			showModal: this.openModal,
			// editMode: true,
			// createMode: true,
			// showMode: true,

		}
	},
	methods: {
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

		}
	},
	mounted: function () {
		// section close modal
		//fonction permettant de fermer la modal quand le bouton echap est press??
		document.addEventListener("keydown", (e) => {
			if (this.showModal && e.keyCode === 27) {
				this.showModal = false;
			}
		});

	},
}
</script>