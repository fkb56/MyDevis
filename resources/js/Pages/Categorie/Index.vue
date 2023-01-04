<template xmlns:wire="http://www.w3.org/1999/xhtml">
  <nav-bar>
	<div class="grid overflow-hidden 2xl grid-cols-4">
	  <button @click="isCreate"
			  class="col-start-4 text-center py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
		Créer une catégorie
	  </button>
	</div>
	<Table v-if="count_category > 0" :col1="'Nom'" :col6="'Actions'" :options="categories" class="mx-auto mt-20"
		   name_link="categorie"
		   @show="isShow" @item="item" @edit="isEdit" @create="isCreate"/>

	<modal
		name="categorie"
		:show-modes="hasShow"
		:edit-modes="hasEdit"
		:create-modes="hasCreate"
		:open-modal="isOpen"
		:value_id="itemModal.id"
		:value1="itemModal.name"
		@close="closeModal"
		@reset="reset"
	/>

	<modal>
	  <create
		  :value_id="itemModal.id"
		  :value1="itemModal.name"
	  />
	</modal>

	<modal>
	  <edit
		  :value_id="itemModal.id"
		  :value1="itemModal.name"
	  />
	</modal>

	<modal>
	  <show
		  :value_id="itemModal.id"
		  :value1="itemModal.name"/>
	</modal>

	<div v-if="count_category === 0">
	  <div class="text-center mt-16 text-2xl font-bold text-gray-700">Il n'y as aucun produit, voulez-vous en
		créer un ?
	  </div>
	  <div class="text-center mt-10">
		<a :href="route('produits.create')"
		   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
		  Créer un produit
		</a>
	  </div>
	</div>

  </nav-bar>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Table from "@/Pages/Categorie/components/Tables";
import Modal from "@/Jetstream/Modal";
import Button from "@/Jetstream/Button";
import NavBar from "@/Layouts/NavBar";
import Create from "@/Pages/Categorie/components/Create.vue";
import Show from "@/Pages/Profile/Show.vue";

export default {
  name: "Index",
  props: {
	categories: Array,
	count_category: Number,
  },
  components: {
	Show,
	Create,
	Button,
	Modal,
	Table,
	AppLayout,
	NavBar,
  },
  data() {
	return {
	  isOpen: false,
	  hasShow: false,
	  hasEdit: false,
	  hasCreate: false,
	  sidebarToggle: false,
	  itemModal: {},
	}
  },
  methods: {
	sidebar: function (event) {
	  this.sidebarToggle = event
	},
	isShow: function () {
	  this.closeModal()
	  this.isOpen = true
	  this.hasShow = true
	},
	isEdit: function () {
	  this.closeModal()
	  this.isOpen = true
	  this.hasEdit = true
	},
	isCreate: function () {
	  this.closeModal()
	  this.isOpen = true
	  this.hasCreate = true
	},
	item: function (e) {
	  // console.log(e)
	  this.itemModal = e
	},
	// section close modal
	//fonction permettant de fermer la modal quand un click est effectuer en dehors de l'id "backdrop"
	handleBackdropClick(e) {
	  if (e.target.id === "backdrop") {
		this.isOpen = false
	  }

	},
	openModal: function () {
	  this.isOpen = true;
	},
	closeModal: function () {
	  this.isOpen = false;
	  this.reset();
	  this.hasShow = false
	  this.hasEdit = false;
	  this.hasCreate = false;
	},
	reset: function () {
	  return true
	},
	save: function (data) {
	  this.$inertia.post('/posts', data)
	  this.reset();
	  this.closeModal();
	  this.editMode = false;
	},
	edit: function (data) {
	  this.form = Object.assign({}, data);
	  this.editMode = true;
	  this.openModal();
	},
	update: function (data) {
	  data._method = 'PUT';
	  this.$inertia.post('/posts/' + data.id, data)
	  this.reset();
	  this.closeModal();
	},
	deleteRow: function (data) {
	  if (!confirm('Are you sure want to remove?')) return;
	  data._method = 'DELETE';
	  this.$inertia.post('/posts/' + data.id, data)
	  this.reset();
	  this.closeModal();
	}
  },
}
</script>

<style scoped>
</style>
