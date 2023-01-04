<template>
	<nav-bar>
		<div class="grid overflow-hidden 2xl grid-cols-4">
			<button
				@click="isCreate"
				class="
					mt-2
					col-start-4
					text-center
					py-2
					bg-gray-800
					border border-transparent
					rounded-md
					font-semibold
					text-xs text-white
					uppercase
					tracking-widest
					hover:bg-gray-700
					active:bg-gray-900
					focus:outline-none
					focus:border-gray-900
					focus:ring
					focus:ring-gray-300
					disabled:opacity-25
					transition
				"
			>
				Créer un produit
			</button>
		</div>

		<!-- Tableau affichant les produits et des boutons qui renvoie le mode a utilisé pour le modal -->
		<Table
			v-if="count_product > 0"
			:col1="'Nom'"
			:col2="'Catégorie'"
			:col3="'Référence'"
			:col4="'Quantité'"
			:col5="'Stock'"
			:col6="'Actions'"
			:options="products"
			class="mx-auto mt-10"
			name_link="produits"
			@show="isShow"
			@item="item"
			@edit="isEdit"
		/>

		<modals :show="hasShow" max-width="sm" @close="closeModal()">
			<ShowModal
				:item="itemModal"
				:category="category"
				:measure_unit="measure_unit"
				:value_date="itemModal.updated_at"
				@close="hasShow = !hasShow"
			/>
		</modals>

		<modals :show="hasEdit" max-width="sm" @close="closeModal()">
			<EditModal
				:item="itemModal"
				:categories="categories"
				:category="category"
				:measure_units="measure_units"
				:measure_unit="measure_unit"
				:value_date="itemModal.updated_at"
				@close="hasEdit = !hasEdit"
			/>
		</modals>

		<modals :show="hasCreate" max-width="sm" @close="closeModal()">
			<CreateModal
				:item="itemModal"
				:categories="categories"
				:measure_units="measure_units"
				@close="hasCreate = !hasCreate"
			/>
		</modals>

		<confirmation-modal> </confirmation-modal>

		<div v-if="count_product === 0">
			<div class="text-center mt-16 text-2xl font-bold text-gray-700">
				Il n'y a aucun produit, voulez-vous en créer un ?
			</div>

			<div class="text-center mt-10">
				<a
					:href="route('produits.create')"
					class="
						inline-flex
						items-center
						px-4
						py-2
						bg-gray-800
						border border-transparent
						rounded-md
						font-semibold
						text-xs text-white
						uppercase
						tracking-widest
						hover:bg-gray-700
						active:bg-gray-900
						focus:outline-none
						focus:border-gray-900
						focus:ring
						focus:ring-gray-300
						disabled:opacity-25
						transition
					"
				>
					Créer un produit
				</a>
			</div>
		</div>
	</nav-bar>
</template>

<script>
import Table from "./components/Tables";
import NavBar from "@/Layouts/NavBar";
import Modals from "@/Jetstream/Modal";
import ShowModal from "./components/ShowModal";
import EditModal from "./components/EditModal";
import ConfirmationModal from "@/Jetstream/ConfirmationModal";
import CreateModal from "./components/CreateModal";

export default {
	name: "Index",
	emits: ["close"],
	components: {
		NavBar,
		Table,
		Modals,
		ShowModal,
		EditModal,
		CreateModal,
		ConfirmationModal,
	},
	props: {
		products: Array,
		count_product: Number,
		categories: Array,
		measure_units: Array,
	},
	data() {
		return {
			hasShow: false,
			hasEdit: false,
			hasCreate: false,
			itemModal: {},
			category: "",
			measure_unit: "",
		};
	},
	methods: {
		isShow: function () {
			this.closeModal();
			this.hasShow = true;
		},
		isEdit: function () {
			this.closeModal();
			this.hasEdit = true;
		},
		isCreate: function () {
			this.closeModal();
			this.hasCreate = false;
		},
		isDelete: function () {},
		item: function (e) {
			this.itemModal = e;
			this.category = e.category.name;
			this.measure_unit = e.measure_unit.name_full;
		},
		closeModal: function () {
			// console.log("close")
			this.reset();
			this.hasShow = false;
			this.hasEdit = false;
			this.hasCreate = false;
		},
		reset: function () {
			return (this.itemModal = {});
		},
	},
};
</script>

<style scoped></style>
