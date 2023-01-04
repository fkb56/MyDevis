<template>
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
																v-model="value1">
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
</template>

<script>
export default {
	name: "Edit"
}
</script>

<style scoped>

</style>
