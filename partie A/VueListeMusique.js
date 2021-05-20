class VueListeMusique{
  constructor(){
    this.html = document.getElementById("html-vue-liste-musique").innerHTML;
    this.listeMusiqueDonnee = null;
  }

  initialiserListeMusique(listeMusiqueDonnee){
    this.listeMusiqueDonnee = listeMusiqueDonnee;
  }

  afficher(){
    document.getElementsByTagName("body")[0].innerHTML = this.html;

    let listeMusique = document.getElementById("liste-musique");
    const listeMusiqueItemHTML = listeMusique.innerHTML;
    let listeMusiqueHTMLRemplacement = "";

    for(var numeroMusique in this.listeMusiqueDonnee){
      let listeMusiqueItemHTMLRemplacement = listeMusiqueItemHTML;
      listeMusiqueItemHTMLRemplacement = listeMusiqueItemHTMLRemplacement.replace("{Musique.id}",this.listeMusiqueDonnee[numeroMusique].id);
      listeMusiqueItemHTMLRemplacement = listeMusiqueItemHTMLRemplacement.replace("{Musique.nom}",this.listeMusiqueDonnee[numeroMusique].nom);
      listeMusiqueHTMLRemplacement += listeMusiqueItemHTMLRemplacement;
    }

    listeMusique.innerHTML = listeMusiqueHTMLRemplacement;
  }

}
