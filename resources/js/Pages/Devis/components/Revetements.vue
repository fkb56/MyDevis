<template>
    <div class="container mx-auto">
        <div>
            <!-- section button radio -->
            <div class="items-center">
                <label class="mr-2">Revêtements de façade</label>
                <input
                    v-model="choixRvt"
                    class="mr-3"
                    type="radio"
                    value="facade"
                />

                <label class="mr-2">Revêtements des murs</label>
                <input
                    v-model="choixRvt"
                    class="mr-3"
                    type="radio"
                    value="murs"
                />

                <label class="mr-2">Revêtements de sols</label>
                <input
                    v-model="choixRvt"
                    class="mr-3"
                    type="radio"
                    value="sols"
                />

                <label class="mr-2">Revêtements de plafond</label>
                <input
                    v-model="choixRvt"
                    class="mr-3"
                    type="radio"
                    value="plafond"
                />
            </div>
        </div>
        <div class="container mx-auto flex">
            <div
                class="
                    flex-auto
                    max-w-xs
                    py-4
                    px-8
                    bg-white
                    shadow-lg
                    rounded-lg
                    my-20
                    mr-auto
                "
            >
                <div>
                    <div class="text-center text-2xl">Formule 1</div>
                </div>
                <hr class="mb-3" />
                <ul>
                    <li
                        class="
                            shadow-lg
                            mt-3
                            py-1
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Nettoyage
                    </li>
                    <li
                        class="
                            shadow-lg
                            mt-3
                            py-1
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Rebouchage
                    </li>
                    <li
                        class="
                            shadow-lg
                            mt-3
                            py-1
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Protection
                    </li>
                    <li
                        class="
                            shadow-lg
                            mt-3
                            py-1
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Décapage
                    </li>
                </ul>
            </div>
            <div
                class="
                    flex-auto
                    max-w-xs
                    py-4
                    px-8
                    bg-white
                    shadow-lg
                    rounded-lg
                    my-20
                    mr-auto
                "
            >
                <div>
                    <div class="text-center text-2xl">Formule 2</div>
                </div>
                <hr class="mb-3" />
                <ul>
                    <li
                        class="
                            shadow-lg
                            py-1
                            mt-3
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Nettoyage
                    </li>
                    <li
                        class="
                            shadow-lg
                            py-1
                            mt-3
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Protection
                    </li>
                    <li
                        class="
                            shadow-lg
                            py-1
                            mt-3
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Rebouchage
                    </li>
                </ul>
            </div>
            <div
                class="
                    flex-auto
                    max-w-xs
                    py-4
                    px-8
                    bg-white
                    shadow-lg
                    rounded-lg
                    my-20
                    mr-auto
                "
            >
                <div>
                    <div class="text-center text-2xl">Formule 3</div>
                </div>
                <hr class="mb-3" />
                <ul>
                    <li
                        class="
                            shadow-lg
                            mt-3
                            py-1
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Nettoyage
                    </li>
                    <li
                        class="
                            shadow-lg
                            mt-3
                            py-1
                            text-center
                            border-2 border-gray
                            rounded
                        "
                    >
                        Protection
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
// import Input from "@/Jetstream/Input";

export default {
    // components: {Input},
    data: () => ({
        value: "",
        formules: [],
        choixRvt: "facade",
    }),
    computed: {
        // isLoading() {
        // 	return this.$store.getters["calcul/isLoading"];
        // },
        // hasError() {
        // 	return this.$store.getters["calcul/hasError"];
        // },
        // error() {
        // 	return this.$store.getters["calcul/error"];
        // },
        // hasFormules() {
        // 	return this.$store.getters["calcul/hasFormules"];
        // },
        // formule() {
        // 	return this.$store.getters["calcul/formules"];
        // },
    },
    created() {
        // this.$store.dispatch("calcul/findAll");
    },
    methods: {
        // async createPost() {
        // 	const result = await this.$store.dispatch("post/create", this.$data.message);
        // 	if (result !== null) {
        // 		this.$data.message = "";
        // 	}
        // },
    },
};
</script>

<style scoped></style>
