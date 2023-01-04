<template>
	<v-container class="modal">
		<v-layout class="text-center">
			<v-card elevation="6">
				<v-card-title class="modal-title">Travaux</v-card-title>
				<v-divider></v-divider>
				<v-card-text>Surface</v-card-text>
				<v-divider></v-divider>
			</v-card>
		</v-layout>
		<v-layout> </v-layout>
	</v-container>
</template>

<script>
export default {
	name: "Modal",
};
</script>

<style lang="css" scoped>
.modal {
	float: right;
	margin-left: 400px;
}
</style>
