<!--<template>-->
<!--    <Nav class="top-0"/>-->
<!--    <div class="container flex justify-center items-center md:mt-32 p-10 mx-auto">-->
<!--        &lt;!&ndash; component &ndash;&gt;-->
<!--        <form class="w-full max-w-lg" @submit.prevent="submit">-->
<!--            <div class="flex flex-wrap -mx-3 mb-6">-->
<!--                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">-->
<!--                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"-->
<!--                           for="grid-first-name">-->
<!--                        Nom-->
<!--                    </label>-->
<!--                    <input-->
<!--                        :class="form.errors.last_name ? 'appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white' : 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'"-->
<!--                        id="grid-first-name" type="text" placeholder="Nom" v-model="form.last_name">-->

<!--                    <p v-if="form.errors.last_name" class="text-red-500 text-xs italic text-center">-->
<!--                        {{ form.errors.last_name }}-->
<!--                    </p>-->

<!--                </div>-->
<!--                <div class="w-full md:w-1/2 px-3">-->
<!--                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"-->
<!--                           for="grid-last-name">-->
<!--                        Prénom-->
<!--                    </label>-->
<!--                    <input-->
<!--                        :class="form.errors.first_name ? 'appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white' : 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'"-->
<!--                        id="grid-last-name" type="text" placeholder="Prénom" v-model="form.first_name">-->

<!--                    <p v-if="form.errors.first_name" class="text-red-500 text-xs italic text-center">-->
<!--                        {{ form.errors.first_name }}-->
<!--                    </p>-->

<!--                </div>-->
<!--            </div>-->
<!--            <div class="flex flex-wrap -mx-3 mb-6">-->
<!--                <div class="w-full px-3">-->
<!--                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"-->
<!--                           for="email">-->
<!--                        E-mail-->
<!--                    </label>-->
<!--                    <input-->
<!--                        :class="form.errors.email ? 'appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white' : 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'"-->
<!--                        id="email" type="email" placeholder="E-mail" v-model="form.email">-->

<!--                    <p v-if="form.errors.email" class="text-red-500 text-xs italic text-center">-->
<!--                        {{ form.errors.email }}-->
<!--                    </p>-->

<!--                </div>-->
<!--            </div>-->
<!--            <div class="flex flex-wrap -mx-3 mb-6">-->
<!--                <div class="w-full px-3">-->
<!--                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"-->
<!--                           for="phone">-->
<!--                        Téléphone-->
<!--                    </label>-->
<!--                    <input-->
<!--                        :class="form.errors.phone ? 'appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white' : 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'"-->
<!--                        id="phone" type="tel" placeholder="Numéro de téléphone" v-model="form.phone">-->

<!--                    <p v-if="form.errors.phone" class="text-red-500 text-xs italic text-center">-->
<!--                        {{ form.errors.phone }}-->
<!--                    </p>-->

<!--                </div>-->
<!--            </div>-->
<!--            <div class="flex flex-wrap -mx-3">-->
<!--                <div class="w-full px-3">-->
<!--                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"-->
<!--                           for="message">-->
<!--                        Message-->
<!--                    </label>-->
<!--                    <textarea-->
<!--                        :class="form.errors.message ? 'no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-48 resize-none' : 'no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none'"-->
<!--                        id="message" placeholder="Rentrez-votre message" v-model="form.message"></textarea>-->

<!--                    <p v-if="form.errors.message" class="text-red-500 text-xs italic text-center">-->
<!--                        {{ form.errors.message }}-->
<!--                    </p>-->

<!--                </div>-->
<!--            </div>-->
<!--            <div class="md:flex md:justify-end">-->
<!--                <div class="">-->
<!--                    <button-->
<!--                        class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"-->
<!--                        type="submit">-->
<!--                        Envoyer-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--    <Footer :user="user"/>-->
<!--</template>-->

<script>
import Nav from "@/Layouts/Nav";
import Footer from "@/Layouts/Footer";
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    name: "Contact",
    components: {
        Footer,
        Nav
    },
    props: {
        user: Object,
    },
    computed: {},
    methods: {},
    data() {
        return {}
    },
    watch() {
    },
    setup() {
        const form = useForm({
            first_name: null,
            last_name: null,
            email: null,
            phone: null,
            message: null
        })

        function submit() {
            form.post('/contact')
        }

        return {form, submit}
    },
    beforeCreate() {
    },
    created() {
    },
    beforeMount() {
    },
    mounted() {
    },
    beforeUpdate() {
    },
    updated() {
    },
    beforeUnmount() {
    },
    unmounted() {
    },
};
</script>

<style lang="css" scoped>

</style>
