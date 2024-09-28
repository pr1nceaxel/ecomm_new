// fetch("recuperation.php").then(response => response.json()).then(data => {
//     console.log(data);

fetch("recuperation.php").then(response => response.json()).then(data => {
    const articlesContainer = document.getElementById("articles-container");
    console.log(data);

    // Ajoute dynamiquement chaque article
    data.forEach(article => {
        const articleDiv = document.createElement("div");
        articleDiv.className = "h-80 w-70 bg-white rounded-xl shadow-md overflow-hidden";

        // Ajoute les détails de l'article
        articleDiv.innerHTML = `
            <img class="h-40 w-full object-contain" src="${article.photo_url}" alt="">
            <div class="p-1 font-bold text-2xl text-center uppercase">${article.nom}</div>
            <div class="text-gray-700 text-center font-bold uppercase">${article.prix} FCFA</div>
                <form method="GET" action"details.php">
            <input name="id-article value =${article.id} />
            <button id="bouton" name="btn_vp" class="bg-red-500 active:bg-red-700 font-bold text-white rounded-full px-7 text-lg flex mx-auto mt-3" >Voir+</button>
                 </form>`;
            
                         
            // Ajoute l'article au conteneur
        articlesContainer.appendChild(articleDiv);
    });
})
.catch(error => console.error(error));