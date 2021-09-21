<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- início do card de busca -->
                <card-component titulo="Pesquisar">

                    <!-- slot para o conteúdo -->
                    <template v-slot:conteudo>

                        <div class="form-row">

                            <div class="col mb-3">

                                <input-container-component id="inputID" titulo="ID"  idHelp="idHelp" textoAjuda="Opcional. Informe o ID da marca.">
                                    <input type="number" class="form-control" id="inputID" aria-describedby="idHelp" placeholder="ID">
                                </input-container-component>

                            </div>
                            <div class="col mb-3">

                                <input-container-component titulo="Nome da marca" id="inputNome" idHelp="nomeHelp" textoAjuda="Opcional. Informe o nome da marca.">
                                    <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Nome da marca">
                                </input-container-component>
                                
                            </div>
                            
                        </div>
                    </template>

                    <!-- slot para o rodapé -->
                    <template v-slot:rodape>
                        <button type="submit" class="btn btn-info float-right">Pesquisar</button>                        

                    </template>

                </card-component>
                <!-- fim do card de busca -->

                <!-- início do card de listagem -->
                <card-component titulo="Relação de marcas">
                    <template v-slot:conteudo>
                        <table-component></table-component>

                    </template>

                    <template v-slot:rodape>
                        <button type="button" class="btn btn-success float-right"  data-toggle="modal" data-target="#modalMarca">Adicionar</button>                        

                    </template>

                </card-component>
                <!-- fim do card de listagem -->

                
            </div>
        </div>

        <modal-component id="modalMarca" titulo="Adicionar marca">
                <template v-slot:conteudo>
                    <div class="form-group">
                        <input-container-component titulo="Nome da marca" id="novoNome" idHelp="novoImagemHelp" textoAjuda="Informe o nome da marca.">
                            <input type="text" class="form-control" id="novoNome" aria-describedby="novoImagemHelp" placeholder="Nome da marca">
                        </input-container-component>
                    </div>    
                    <div class="form-group">
                        <input-container-component titulo="Imagem" id="novoImagem" idHelp="imagemHelp" textoAjuda="Selecione uma imagem no formato .PNG.">
                            <input type="file" class="form-control-file" id="novoImagem" aria-describedby="imagemHelp" placeholder="Selecione uma imagem">
                        </input-container-component>
                    </div>
                    
                </template>

                <template v-slot:rodape>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </template>

        </modal-component>
       
    </div> <!-- container -->
</template>

<script>
    
</script>
