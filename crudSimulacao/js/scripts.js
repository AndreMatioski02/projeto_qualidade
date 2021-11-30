$( document ).ready(function(){  //"$( document ) é um seletor do JQuery, que seleciona um elemento da página (document), ready = página pronta, tudo carregado"
    //console.log("Chegou aqui!");
    function populaEstados(){
        const ufSelect = document.querySelector("select[id=selectEstado]");
        fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
            .then((res) => res.json()) //recebe "res" como parametro e o transforma no formato json (após o fetch, por causa do .then)
            .then( states => {  //states tem os estados vindos do fetch
                for(const state of states){
                    ufSelect.innerHTML += `<option value="${state.sigla}">${state.nome}</option>`;
                }
            })
    }

    populaEstados();

    function populaCidades(event){
        const cidadeSelect = document.querySelector("#selectCidade");
        const estadoSigla = event.target.value;     //event é a seleção do estado na página, target.value pega o valor do estado selecionado (sigla)
        const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/municipios`;
        cidadeSelect.innerHTML = '';
        fetch(url)
            .then((res) => res.json())
            .then( cities => {
                for(const city of cities){
                    cidadeSelect.innerHTML += `<option value="${city.nome}">${city.nome}</option>`;
                }
                cidadeSelect.disabled = false;      //habilita o campo cidades do estado específico assim que um estado for selecionado
            })
    }

    document.querySelector("#selectEstado").addEventListener("change", populaCidades); //eventListener escuta uma change no estado, ou seja, espera até que algum estado seja selecionado e chama populaCidades
});

