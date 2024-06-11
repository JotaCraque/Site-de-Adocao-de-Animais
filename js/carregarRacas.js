function carregarRacas() {
    var selectAnimal = document.getElementById("animal");
    var selectRaca = document.getElementById("raca");
    selectRaca.innerHTML = ""; // Limpa as opções atuais

    var animalSelecionado = selectAnimal.value;

    // Adiciona as opções de raça com base no animal selecionado
    if (animalSelecionado === "Gato") {
        var racasGato = ["Abissínio", "Bengal", "Birmanês", "Bombaim", "British Shorthair", "Devon Rex", "Maine Coon", "Norueguês da Floresta", "Persa", "Ragdoll", "Scottish Fold", "Siamês", "Siamês Tradicional", "Siberiano", "Sphynx", "Outros"];
        for (var i = 0; i < racasGato.length; i++) {
            var option = document.createElement("option");
            option.text = racasGato[i];
            selectRaca.add(option);
        }
    } else if (animalSelecionado === "Cachorro") {
        var racasCachorro = ["Beagle", "Border Collie", "Buldogue Francês", "Bulldog", "Chihuahua", "Dachshund", "Golden Retriever", "Husky Siberiano", "Labrador", "Pastor Alemão", "Poodle", "Pug", "Shih Tzu", "Yorkshire Terrier", "Outros"];
        for (var i = 0; i < racasCachorro.length; i++) {
            var option = document.createElement("option");
            option.text = racasCachorro[i];
            selectRaca.add(option);
        }
    }
}

// Chama a função inicialmente para carregar as raças baseado na opção inicial do select animal
carregarRacas();
