<template>
  <!-- section showMode-->
	<div class="relative p-6 flex-auto">
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
</template>

<script>
export default {
	name: "Show"
}
</script>

<style scoped>

</style>
