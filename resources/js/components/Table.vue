<template>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" v-for="t, key in titulos" :key="key">{{t.titulo}}</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr v-for="obj, chave in dadosFiltrados" :key="chave">
                    <td v-for="valor, chaveValor in obj" :key="chaveValor">
                        <span v-if="titulos[chaveValor].tipo == 'texto'">{{ valor }}</span>
                        <span v-if="titulos[chaveValor].tipo == 'data'">{{'...'+valor }}</span>
                        <span v-if="titulos[chaveValor].tipo == 'imagem'">
                            <img :src="'/storage/'+valor" width="30">
                        </span>

                    </td>
                </tr>
                <!-- <tr v-for="obj in dados" :key="obj.id">
                    // verificar se o objeto 'dados' possui as chaves informadas no objeto 'titulos'
                    <td v-if="titulos.includes(chave)" v-for="valor, chave in obj" :key="chave"> 
                        <span v-if="chave == 'imagem'">
                            <img :src="'/storage/'+valor" width="30">
                        </span>
                        <span v-else>
                            {{ valor }}
                        </span>
                    </td>
                </tr> -->
               
                
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['dados', 'titulos'],
        computed: {
            dadosFiltrados(){

                let campos = Object.keys(this.titulos)
                let dadosFiltrados = []

                this.dados.map((item, chave) => {
                    let itemFiltrado = {}
                    campos.forEach(campo => {
                        itemFiltrado[campo] = item[campo]
                    })
                    dadosFiltrados.push(itemFiltrado)
                })

                return dadosFiltrados // retorne um array de objetos
            }
        }
    }
</script>
