<template>
    <div class="x flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-3xl mx-auto mb-10">
            <div class="text-center">
                <img class="mx-auto h-10 w-auto" src="../assets/logoCode2120.png" alt="Workflow">
                <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-slate-400">Veuillez utiliser le formulaire ci-dessous pour nous contacter. Merci !</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700 mt-10">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Checkout</h1>
                <div class="mb-6">
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="Nom" class="block text-gray-700 dark:text-white mb-1">Nom <span class="text-red-500">*</span></label>
                            <input v-model="nom" type="text" id="Nom" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            <p v-if="errors.nom" class="text-red-500 text-sm mt-1">{{ errors.nom[0] }}</p>
                        </div>
                        <div>
                            <label for="Prénom" class="block text-gray-700 dark:text-white mb-1">Prénom <span class="text-red-500">*</span></label>
                            <input v-model="prenom" type="text" id="Prénom" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            <p v-if="errors.prenom" class="text-red-500 text-sm mt-1">{{ errors.prenom[0] }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="CNE" class="block text-gray-700 dark:text-white mb-1">CNE <span class="text-red-500">*</span></label>
                            <input v-model="cne" type="text" id="CNE" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            <p v-if="errors.cne" class="text-red-500 text-sm mt-1">{{ errors.cne[0] }}</p>
                        </div>
                        <div>
                            <label for="Etablissement" class="block text-gray-700 dark:text-white mb-1">Établissement <span class="text-red-500">*</span></label>
                            <input v-model="etablissement" type="text" id="Etablissement" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="Universite" class="block text-gray-700 dark:text-white mb-1">Université <span class="text-red-500">*</span></label>
                            <input v-model="universite" type="text" id="Universite" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="Filiere" class="block text-gray-700 dark:text-white mb-1">Filière <span class="text-red-500">*</span></label>
                            <input type="text" id="Filiere" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="address" class="block text-gray-700 dark:text-white mb-1">Adresse e-mail institutionnelle <span class="text-red-500">*</span></label>
                        <input v-model="email" type="email" id="address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        <p v-if="errors.email" class="text-red-500 text-sm mt-1">{{ errors.email[0] }}</p>
                    </div>

                    <div class="mt-4">
                        <label for="Formation" class="block text-gray-700 dark:text-white mb-1">Formation <span class="text-red-500">*</span></label>
                        <input v-model="formation" type="text" id="Formation" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
                    <div class="mt-4">
                        <label for="Description" class="block text-gray-700 dark:text-white mb-1">Description <span class="text-red-500">*</span></label>
                        <textarea v-model="description" id="Description" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button @click="submitForm" class="bg-purple-700 text-white px-8 py-4 rounded-lg hover:bg-purple-500 ">Envoyer</button>
            </div>
            <!-- footer -->
            <Footer />
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Footer from '@/components/Footer.vue';
import success from './success.vue';
export default {
    name: 'mainPage',
    components: {
        Footer,
        success,
    },
    data() {
        return {
            nom: '',
            prenom: '',
            cne: '',
            etablissement: '',
            universite: '',
            email: '',
            formation: '',
            description: '',
            errors: {},
        };
    },
    methods: {
        submitForm() {
            const payload = {
                nom: this.nom,
                prenom: this.prenom,
                cne: this.cne,
                etablissement: this.etablissement,
                universite: this.universite,
                email: this.email,
                formation: this.formation,
                description: this.description,
            };

            axios.post('http://localhost:8000/api/etudiants', payload)
                .then(response => {
                    console.log('Données envoyées avec succès:', response.data);
                    this.errors = {}; // Réinitialiser les erreurs en cas de succès
                    // alert('Le formulaire a été soumis avec succès !');
                    this.$router.push({ name: 'success' });
                })
                .catch(error => {
                    if (error.response && error.response.status === 400) {
                        this.errors = error.response.data || {};
                    } else {
                        console.error('Erreur lors de l\'envoi des données:', error);
                        alert('Une erreur est survenue lors de la soumission du formulaire.');
                    }
                });
        },
    },
};

</script>

<style >
body {
    background: linear-gradient(135deg, rgba(255, 192, 203, 0.5), rgba(173, 216, 230, 0.5), rgba(240, 248, 255, 1));
    height: 100%; 
    margin: 0; 
}
.text-red-500 {
    color: #f56565;
}

.text-sm {
    font-size: 0.875rem;
}

.mt-1 {
    margin-top: 0.25rem; 
}

</style>