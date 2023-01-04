<template>
	<!--  <Head :title="title ? `${title} - MyDevis` : 'MyDevis'">-->
	<!--    <slot />-->
	<!--  </Head>-->
	<Head>
		<title>
			{{ title ? `${title} - JSLS Peinture` : "JSLS Peinture" }}
		</title>
		<slot />
	</Head>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";

export default {
	components: {
		// head,
	},
	props: {
		title: String,
	},
};
</script>
