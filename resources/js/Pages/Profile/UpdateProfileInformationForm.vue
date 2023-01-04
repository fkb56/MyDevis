<template>
	<jet-form-section @submitted="updateProfileInformation">
		<template #title>
			Information du compte
		</template>

		<template #description>
			Mettre à jour vos informations de votre compte.
		</template>

		<template #form>
			<!-- Profile Photo -->
			<div class="col-span-6 sm:col-span-4" v-if="$page.props.jetstream.managesProfilePhotos">
				<!-- Profile Photo File Input -->
				<input type="file" class="hidden"
					   ref="photo"
					   @change="updatePhotoPreview">

				<jet-label for="photo" value="Photo"/>

				<!-- Current Profile Photo -->
				<div class="mt-2" v-show="! photoPreview">
					<img :src="user.profile_photo_url" :alt="user.name" class="rounded-full h-20 w-20 object-cover">
				</div>

				<!-- New Profile Photo Preview -->
				<div class="mt-2" v-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
						  :style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
				</div>

				<jet-secondary-button class="mt-2 mr-2" type="button" @click.prevent="selectNewPhoto">
					Sélectionnez un logo
				</jet-secondary-button>

				<jet-secondary-button type="button" class="mt-2" @click.prevent="deletePhoto"
									  v-if="user.profile_photo_path">
					Supprimez le logo
				</jet-secondary-button>

				<jet-input-error :message="form.errors.photo" class="mt-2"/>
			</div>

			<!-- Name Enterprise -->
			<div class="col-span-6 sm:col-span-4">
				<jet-label for="name_enterprise" value="Nom Entreprise"/>
				<jet-input id="name_enterprise" type="text" class="mt-1 block w-full" v-model="form.name_enterprise"
						   autocomplete="name_enterprise"/>
				<jet-input-error :message="form.errors.name_enterprise" class="mt-2"/>
			</div>

			<!-- Last name -->
			<div class="col-span-6 sm:col-span-4">
				<jet-label for="last_name" value="Nom"/>
				<jet-input id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name"
						   autocomplete="last_name"/>
				<jet-input-error :message="form.errors.last_name" class="mt-2"/>
			</div>

			<!-- Name -->
			<div class="col-span-6 sm:col-span-4">
				<jet-label for="name" value="Prénom"/>
				<jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autocomplete="name"/>
				<jet-input-error :message="form.errors.name" class="mt-2"/>
			</div>

			<!-- Email -->
			<div class="col-span-6 sm:col-span-4">
				<jet-label for="email" value="Email"/>
				<jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email"/>
				<jet-input-error :message="form.errors.email" class="mt-2"/>
			</div>

			<!-- Address -->
			<div class="col-span-6 sm:col-span-4">
				<jet-label for="address" value="Adresse"/>
				<jet-input id="address" type="text" class="mt-1 block w-full" v-model="form.street_number" autocomplete="adress"/>
				<jet-input-error :message="form.errors.street_number" class="mt-2"/>
			</div>

		</template>

		<template #actions>
			<jet-action-message :on="form.recentlySuccessful" class="mr-3 text-green-500 font-bold">
				Sauvegarder
			</jet-action-message>

			<jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
				Sauvegarder
			</jet-button>
		</template>
	</jet-form-section>
</template>

<script>
import JetButton from '@/Jetstream/Button'
import JetFormSection from '@/Jetstream/FormSection'
import JetInput from '@/Jetstream/Input'
import JetInputError from '@/Jetstream/InputError'
import JetLabel from '@/Jetstream/Label'
import JetActionMessage from '@/Jetstream/ActionMessage'
import JetSecondaryButton from '@/Jetstream/SecondaryButton'

export default {
	components: {
		JetActionMessage,
		JetButton,
		JetFormSection,
		JetInput,
		JetInputError,
		JetLabel,
		JetSecondaryButton,
	},

	props: ['user'],

	data() {
		return {
			form: this.$inertia.form({
				_method: 'PUT',
				name_enterprise: this.user.name_enterprise,
				civility: this.user.civility_id,
				name: this.user.name,
				last_name: this.user.last_name,
				street_number: this.user.street_number,
				street: this.user.street,
				post_code: this.user.post_code,
				region: this.user.region,
				country: this.user.country,
				email: this.user.email,
				photo: null,
			}),

			photoPreview: null,
		}
	},

	methods: {
		updateProfileInformation() {
			if (this.$refs.photo) {
				this.form.photo = this.$refs.photo.files[0]
			}

			this.form.post(route('user-profile-information.update'), {
				errorBag: 'updateProfileInformation',
				preserveScroll: true,
				onSuccess: () => (this.clearPhotoFileInput()),
			});
		},

		selectNewPhoto() {
			this.$refs.photo.click();
		},

		updatePhotoPreview() {
			const photo = this.$refs.photo.files[0];

			if (!photo) return;

			const reader = new FileReader();

			reader.onload = (e) => {
				this.photoPreview = e.target.result;
			};

			reader.readAsDataURL(photo);
		},

		deletePhoto() {
			this.$inertia.delete(route('current-user-photo.destroy'), {
				preserveScroll: true,
				onSuccess: () => {
					this.photoPreview = null;
					this.clearPhotoFileInput();
				},
			});
		},

		clearPhotoFileInput() {
			if (this.$refs.photo?.value) {
				this.$refs.photo.value = null;
			}
		},
	},
}
</script>
