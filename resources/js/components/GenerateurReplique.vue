<template>
    <div class="container">
        <h1>🎭 Générateur de Répliques 🎭</h1>
        <p v-if="loading">Chargement...</p>
        <div v-else>
            <blockquote>"{{ replique.replique }}"</blockquote>
            <p>— {{ replique.auteur }} ({{ replique.piece }})</p>
            <button @click="getReplique">Nouvelle réplique</button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            replique: {},
            loading: false,
        };
    },
    methods: {
        async getReplique() {
            this.loading = true;
            try {
                const response = await axios.get("/api/replique");
                this.replique = response.data;
            } catch (error) {
                console.error(
                    "Erreur lors du chargement de la réplique",
                    error
                );
            } finally {
                this.loading = false;
            }
        },
    },
    mounted() {
        this.getReplique();
    },
};
</script>

<style scoped>
.container {
    text-align: center;
    font-family: "Georgia", serif;
    margin-top: 20px;
}
blockquote {
    font-size: 1.5rem;
    font-style: italic;
    margin: 20px auto;
    max-width: 600px;
}
button {
    background-color: #8e44ad;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 1rem;
}
button:hover {
    background-color: #732d91;
}
</style>
