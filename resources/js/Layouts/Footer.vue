<template>
	<footer class="footer bg-white pt-1 border-blue-700 mt-5">
		<div class="mx-auto px-6">

			<div class="sm:flex sm:mt-8">
				<div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
					<div class="flex flex-col text-center md:text-left" v-for="enterprise in user" :key="enterprise.id">
						<span class="font-bold text-gray-700 uppercase mb-2 text-center">Informations</span>
						<span class="my-2"><a href="" class="text-blue-700 cursor-default text-md">{{ `${enterprise.street_number} ${enterprise.street}, ${enterprise.post_code} ${enterprise.city}` }}</a></span>
						<span class="my-2"><a :href="`tel:${enterprise.phone}`"
											  class="text-blue-700 text-md hover:text-blue-500">{{ phone }}</a></span>
						<span class="my-2"><a :href="`mailto:${ enterprise.email }`" class="text-blue-700  text-md hover:text-blue-500">Envoyer un e-mail</a></span>
					</div>
					<div class="flex flex-col">
						<span
							class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2 text-center px-28">Horaires</span>
						<div class="flex">
							<span class="my-2 flex-1 font-medium">Mar-Sam</span>
							<span class="my-2 flex-2 text-green-500 font-bold">09:00 - 18:00</span>
						</div>
						<div class="flex">
							<span class="my-2 flex-1 font-medium">Dim-Lun</span>
							<span class="my-2 flex-2 text-red-600 font-bold">Fermé</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto px-6">
			<div class="border-t-2 mt-2-1 border-gray-300 flex flex-col items-center">
				<div class="sm:w-2/3 text-center">
					<p class="text-sm text-blue-700 font-bold mt-3">
						© 2021 - Franck Bouda
					</p>
				</div>
			</div>
		</div>
	</footer>
</template>

<script>
export default {
	name: "Footer",
	props: {
		user: Object
	},
	computed: {
		enterprise: function () {
			let enterprise = {}
			for (const user of this.user) {
				enterprise += user
			}
			return enterprise
		},

		phone_link: function (e) {
			let phone = e.user[0].phone.split('')
			if (phone[0] === '0') {
				phone[0] = '+33'
				return phone.join('')
			}
		},

		phone: function (e) {
			// let phone = e.user[0].phone.split('')
			// for( let i = 0; i < phone.length; i++){
			// 	if (phone[i] !== " "){
			// 		console.log('e')
			// 	}
			// }
			return e.user[0].phone
		}
	}
}
</script>

<style scoped>

</style>
