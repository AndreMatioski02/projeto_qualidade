$( document ).ready(function() {
    function populaEstados() {
        const ufSelect = document.querySelector("select[id=selectEstado]");
        fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
        .then( (res) => res.json() )
        .then( states => {
            for(const state of states) {
                ufSelect.innerHTML += `<option value="${state.sigla}">${state.nome}</option>`
            }
        })
    }

    populaEstados();

    function populaCidades(event) {
        const cidadeSelect = document.querySelector("#selectCidade");
        const estadoSigla = event.target.value; // event é a seleção do estado na página, target.value pega o valor do estado selecionado (sigla)
        const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/municipios`;
        cidadeSelect.innerHTML = '';
        fetch(url)
            .then( (res) => res.json() )
            .then( cities => {
                for(const city of cities){
                    cidadeSelect.innerHTML += `<option value="${city.nome}">${city.nome}</option>`;
                    cidadeSelect.disabled = false
                }
            })
    }

    document 
        .querySelector("#selectEstado")
        .addEventListener("change", populaCidades);

});