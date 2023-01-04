<template>
	<div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4 mx-auto">
		<slot name="img" />
		<slot name="footImg" />
		<div class="py-4 px-6">
			<slot name="title"/>
			<slot name="content"/>
		</div>
	</div>
</template>

<script>
import Pinceau from "@/SVG/Pinceau";

export default {
	name: 'Cards',
	components: {
		Pinceau
	}
};
</script>
