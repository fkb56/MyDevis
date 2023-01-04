<template>
    <div class="container mx-auto">
        <div>

            <!--			 section button radio-->
            <label>Surface en m2</label>
            <input v-model="choiceCalcul"
                   class="ml-3 mr-5"
                   type="radio"
                   value="true"
            >

            <label>Calcul de la surface</label>
            <input v-model="choiceCalcul"
                   class="ml-3"
                   type="radio"
                   value="false"
            >

            <br>

            <div class="surface-form">
                <div>
                    <div>
                        <!--						 section calcul-->
                        <input
                            v-if="choiceCalcul === 'true'"
                            v-model="result"
                            class="pt-2 rounded border-red-500 focus:border-red-500"
                        >
                    </div>

                    <!--					 section résultat-->
                    <div
                        v-if="result"
                        class="surface-result border-red-500 border-2 mt-4 rounded"
                    >
                        {{ result }}
                    </div>
                </div>
            </div>

            <div class="surface-form">
                <div>
                    <div>
                        <!--						 section calcul-->
                        <label v-if="choiceCalcul === 'false'" class="mr-1">Rentrez la longueur</label>
                        <input
                            v-if="choiceCalcul === 'false'"
                            v-model="longueur"
                            class="d-inline-block mr-6 pt-2"
                            placeholder="Rentrez la longueur"
                        >

                        <label v-if="choiceCalcul === 'false'" class="mr-1">Rentrez la largeur</label>
                        <input
                            v-if="choiceCalcul === 'false'"
                            v-model="largeur"
                            class="d-inline-block pt-2"
                            placeholder="Rentrez la largeur"
                        >
                    </div>

                    <!--					 section résultat-->
                    <div v-if="Resultat && choiceCalcul" class="surface-result border-red-500 border-2 mt-4 rounded">
                        {{ Resultat }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Input from "@/Jetstream/Input";

export default {
    name: "Surface",
    components: {Input},
    data() {
        return {
            choiceCalcul: "true",
            isValid: false,
            longueur: "",
            largeur: "",
            result: "",
            picked: ""
        };
    },
    computed: {
        Resultat() {
            return this.longueur * this.largeur;
        },
    },
};
</script>

<style lang="css" scoped>
/*.surface- {*/
/*    &result {*/
/*        padding: 0 70px;*/
/*        width: 11%;*/
/*    }*/

/*    &form {*/
/*        margin: 3% auto;*/
/*    }*/
/*}*/
</style>
