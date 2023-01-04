<template>
	<!--Container -->
	<div class="mx-auto bg-grey-lightest mt-10">
		<!--Screen-->
		<div class="min-h-screen flex flex-col">

			<div class="flex flex-1">
				<!--Main-->
				<main class="bg-white-500 flex-1 p-3 overflow-hidden">

					<div class="flex flex-col">
						<!-- Card Section Starts Here -->
						<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">

							<!--Grid Form-->

							<div class="flex flex-1 justify-center flex-col md:flex-row lg:flex-row mx-2">
								<div class="mb-2 border-solid border-gray-300 rounded border shadow-xl w-1/2">
									<div class="p-3">
										<table class="table-responsive w-full rounded">
											<thead class="bg-gray-200">
											<tr>
												<th class="border w-1/3 px-4 py-2 text-center">{{ col1 }}</th>
												<th class="border w-1/6 px-4 py-2 text-center">{{ col6 }}</th>
											</tr>
											</thead>
											<tbody>
											<tr v-for="option in options" :key="option.id" class="hover:bg-gray-200">
												<td class="border px-4 py-2 text-center">{{ option.name }}</td>
												<td class="border px-4 py-2 text-center">
													<a @click="show(option)"
														class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
														<i class="fas fa-eye"></i></a>
													<a @click="edit(option)"
														class="bg-gray-600 cursor-pointer rounded p-1 mx-1 text-white">
														<i class="fas fa-edit"></i></a>
													<a @click="deleted(option)"
														class="bg-gray-600 cursor-pointer rounded p-1 px-2 mx-1 text-red-500">
														<i class="fas fa-trash"></i>
													</a>
												</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--/Grid Form-->
						</div>
					</div>
				</main>
				<!--/Main-->
			</div>
		</div>
	</div>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
	name: 'Tables',
	props: {
		data: String,
		errors: String,
		col1: String,
		col2: String,
		col3: String,
		col4: String,
		col5: String,
		col6: String,
		options: Array,
		name_link: String,
	},
	data(){
		return {
			showModal: true
		}
	},
	methods: {
		create: function () {
			this.$emit('create', this.showModal)
		},
		show: function (e) {
			this.$emit('show', this.showModal)
			this.$emit('item', e)
		},
		edit: function (e) {
			this.$emit('edit', this.showModal)
			this.$emit('item', e)
		},
		deleted: function (e) {
			// if (!confirm('Are you sure want to remove?')) return;
			// this.openModal()
			// console.log('data: ' + data.id)
			// data._method = 'DELETE';
			// this.$inertia.post('produits.destroy', data)
			// Inertia.delete('/produits/' + this.form.id, data)
			Inertia.delete(`/categorie/${e.id}`, e)
		},
	},
}

</script>

<style scoped>
.fas {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	display: inline-block;
	font-style: normal;
	font-variant: normal;
	text-rendering: auto;
	line-height: 1;
}

.fa-ul > li {
	position: relative;
}
.fas {
	margin-right: .3em; }

.fas {
	margin-left: .3em; }

/*.fa-check:before {*/
/*	content: "\f00c"; }*/

/*.fa-edit:before {*/
/*	content: "\f044"; }*/

/*.fa-eye:before {*/
/*	content: "\f06e"; }*/

.fas {
	font-weight: 900; }
</style>
