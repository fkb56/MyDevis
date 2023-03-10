<template>
	<jet-authentication-card>
		<template #logo>
			<jet-authentication-card-logo/>
		</template>

		<div class="mb-4 text-sm text-gray-600">
			<template v-if="! recovery">
				Veuillez confirmer l'accès à votre compte en saisissant le code d'authentification fourni par votre
				application d'authentification.
			</template>

			<template v-else>
				Veuillez confirmer l'accès à votre compte en entrant l'un de vos codes de récupération d'urgence.
			</template>
		</div>

		<jet-validation-errors class="mb-4"/>

		<form @submit.prevent="submit">
			<div v-if="! recovery">
				<jet-label for="code" value="Code"/>
				<jet-input id="code" ref="code" v-model="form.code" autocomplete="one-time-code" autofocus
						   class="mt-1 block w-full" inputmode="numeric" type="text"/>
			</div>

			<div v-else>
				<jet-label for="recovery_code" value="Code de récupération"/>
				<jet-input id="recovery_code" ref="recovery_code" v-model="form.recovery_code" autocomplete="one-time-code"
						   class="mt-1 block w-full" type="text"/>
			</div>

			<div class="flex items-center justify-end mt-4">
				<button class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer" type="button"
						@click.prevent="toggleRecovery">
					<template v-if="! recovery">
						Utiliser un code de vérification
					</template>

					<template v-else>
						Utiliser un code d'authentification
					</template>
				</button>

				<jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="ml-4">
					Se connecter
				</jet-button>
			</div>
		</form>
	</jet-authentication-card>
</template>

<script>
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
import JetButton from '@/Jetstream/Button'
import JetInput from '@/Jetstream/Input'
import JetLabel from '@/Jetstream/Label'
import JetValidationErrors from '@/Jetstream/ValidationErrors'

export default {
	components: {
		JetAuthenticationCard,
		JetAuthenticationCardLogo,
		JetButton,
		JetInput,
		JetLabel,
		JetValidationErrors,
	},

	data() {
		return {
			recovery: false,
			form: this.$inertia.form({
				code: '',
				recovery_code: '',
			})
		}
	},

	methods: {
		toggleRecovery() {
			this.recovery ^= true

			this.$nextTick(() => {
				if (this.recovery) {
					this.$refs.recovery_code.focus()
					this.form.code = '';
				} else {
					this.$refs.code.focus()
					this.form.recovery_code = ''
				}
			})
		},

		submit() {
			this.form.post(this.route('two-factor.login'))
		}
	}
}
</script>
