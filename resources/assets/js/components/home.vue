<template>
<v-content>
    <v-container>
        <h1>
            Хоме
        </h1>
    </v-container>
</v-content>
</template>



<script>
    export default {
        name: "home",
        data() {
            return {
                drawer: false

            }
        },
        mounted() {
            this.drawer = false;
            console.log(this.$route)
        }
    }
</script>
