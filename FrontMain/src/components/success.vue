<template>
    <div class="x flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-3xl mx-auto mb-10">
            <div class="text-center">
                <img class="mx-auto h-10 w-auto" src="../assets/logoCode2120.png" alt="Workflow">
            </div>
            <div class="bg-white dark:bg-gray-800 border-l-4 border-purple-400 p-8 rounded-lg shadow-md border dark:border-gray-700 mt-10">
                <div class="bg-white  text-gray-700 p-4 rounded-lg">
                    <p class="text-2xl font-semibold mb-4">Félicitations !</p>
                    <p class="text-lg ">Votre formulaire a été soumis avec succès.</p>
                    <p class="text-lg ">Nous vous remercions pour votre participation.</p>
                </div>
            </div>
            <button @click="goBack" class="mt-6 bg-purple-700 text-white px-4 py-2 justify-end rounded-lg hover:bg-purple-500">
                Retourner à l'accueil
            </button>
            <!-- footer -->
             <footer>
                <Footer />
             </footer>
        </div>
    </div>
</template>
<script>
import Footer from './Footer.vue';
export default {
    name :'success',
    components: {
        Footer,
    },
    methods: {
        goBack() {
            this.$router.push('/'); // Redirige vers la page d'accueil ou une autre route de ton choix
        }
    }
}

</script>
