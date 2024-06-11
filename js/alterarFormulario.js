function limparCampos(form) {
    var inputs = form.getElementsByTagName('input');
    var selects = form.getElementsByTagName('select');

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type === 'text' || inputs[i].type === 'email' || inputs[i].type === 'tel' || inputs[i].type === 'password' || inputs[i].type === 'date') {
            inputs[i].value = '';
        }
    }

    for (var j = 0; j < selects.length; j++) {
        selects[j].selectedIndex = 0;
    }
}

function alterarFormulario() {
    var pessoaFisica = document.getElementById("pessoaFisica").checked;
    var formPessoaFisica = document.getElementById("formPessoaFisica");
    var formPessoaJuridica = document.getElementById("formPessoaJuridica");

    if (pessoaFisica) {
        formPessoaFisica.style.display = "block";
        formPessoaJuridica.style.display = "none";
        limparCampos(formPessoaJuridica);
    } else {
        formPessoaFisica.style.display = "none";
        formPessoaJuridica.style.display = "block";
        limparCampos(formPessoaFisica);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    alterarFormulario(); // Chamamos a função ao carregar a página para garantir que o estado inicial está correto.
});
