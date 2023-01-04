<template>
	<app-layout>
		<!--        <div>-->
		<!--            <h1 class="text-center text-5xl font-semibold">Calcul</h1>-->
		<!--        </div>-->
		<!--        <div class="modal">-->
		<!--            &lt;!&ndash;			<Modal />&ndash;&gt;-->
		<!--        </div>-->
		<!--        <div class="surface">-->
		<!--            <Surface/>-->
		<!--        </div>-->
		<!--        <div>-->
		<!--            <Revetements/>-->
		<!--        </div>-->
	</app-layout>
</template>

<script>
// import Modal from "./components/Modal";
// import Surface from "./components/Surface";
// import Revetements from "./components/Revetements";

// import AppLayout from "@/Layouts/AppLayout";

export default {
	name: "Calcul",
	components: {
		AppLayout,
		Revetements,
		// Modal,
		Surface,
	},
};
</script>

<style>
.modal {
	float: right;
}
.text-center {
	margin: 2% auto;
}
.surface {
	margin: 0 auto;
}
</style>
