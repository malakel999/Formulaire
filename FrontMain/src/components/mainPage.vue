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
                            <input type="text" id="Nom" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="Prénom" class="block text-gray-700 dark:text-white mb-1">Prénom <span class="text-red-500">*</span></label>
                            <input type="text" id="Prénom" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="CNE" class="block text-gray-700 dark:text-white mb-1">CNE <span class="text-red-500">*</span></label>
                            <input type="text" id="CNE" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="Etablissement" class="block text-gray-700 dark:text-white mb-1">Établissement <span class="text-red-500">*</span></label>
                            <input type="text" id="Etablissement" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="Universite" class="block text-gray-700 dark:text-white mb-1">Université <span class="text-red-500">*</span></label>
                            <input type="text" id="Universite" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="Filiere" class="block text-gray-700 dark:text-white mb-1">Filière <span class="text-red-500">*</span></label>
                            <input type="text" id="Filiere" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="address" class="block text-gray-700 dark:text-white mb-1">Adresse e-mail institutionnelle <span class="text-red-500">*</span></label>
                        <input type="email" id="address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>

                    <div class="mt-4">
                        <label for="Formation" class="block text-gray-700 dark:text-white mb-1">Formation <span class="text-red-500">*</span></label>
                        <input type="text" id="Formation" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
                    <div class="mt-4">
                        <label for="Description" class="block text-gray-700 dark:text-white mb-1">Description <span class="text-red-500">*</span></label>
                        <textarea id="Description" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button class="bg-teal-500 text-white px-8 py-4 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">Envoyer</button>
            </div>
            <!-- footer -->
            <Footer />
        </div>
    </div>
</template>

<script>
import Footer from '@/components/Footer.vue'
export default {
    name : 'mainPage',
    components: {
        Footer 
    }
}
</script>

<style>
body {
    background: linear-gradient(135deg, rgba(255, 192, 203, 0.5), rgba(173, 216, 230, 0.5), rgba(240, 248, 255, 1));
    height: 100%; 
    margin: 0; 
}
</style>