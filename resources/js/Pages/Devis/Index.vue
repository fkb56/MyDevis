<template>
	<Meta :title="'Devis'" />
	<nav-bar>
		<Sectionclient></Sectionclient>
	</nav-bar>
</template>

<script>
import Meta from "@/Jetstream/Meta";
import NavBar from "@/Layouts/NavBar";
import Sectionclient from "@/Pages/Devis/components/SectionClient";

export default {
	name: "Index",
	components: {
		Sectionclient,
		NavBar,
		Meta,
	},
};
</script>

<style lang="scss" scoped></style>
