
<template>
    <div :class="estilo" role="alert">
        {{titulo}}
        <hr>
        <span v-if="detalhes.data.message">{{detalhes.data.message}}</span>
        <span v-if="detalhes.data.id">{{'ID do registro: '+detalhes.data.id}}</span>
        <br>
        <ul v-if="detalhes.data.errors"> <!-- verifica se existe erros -->
            <li v-for="e, key in detalhes.data.errors" :key="key">{{ e[0] }}</li> <!-- lista de erros --> 
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['tipo', 'titulo', 'detalhes'],
        computed: {
            estilo(){
                return 'alert alert-'+this.tipo
            }
        }
    }
</script>
