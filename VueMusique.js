class VueMusique{
  constructor(){
    this.html = document.getElementById("html-vue-musique").innerHTML;
    this.musique = null;
  }

  initialiserMusique(musique){
    this.musique = musique;
  }

  afficher(){
    document.getElementsByTagName("body")[0].innerHTML = this.html;
    document.getElementById("musique-nom").innerHTML = this.musique.nom;
    document.getElementById("musique-artiste").innerHTML = this.musique.artiste;
    document.getElementById("musique-style").innerHTML = this.musique.style;
    document.getElementById("musique-datedesortie").innerHTML = this.musique.datedesortie;
    document.getElementById("musique-label").innerHTML = this.musique.label;
    document.getElementById("musique-duree").innerHTML = this.musique.duree;
    document.getElementById("musique-certification").innerHTML = this.musique.certification;
    document.getElementById("musique-positionusa").innerHTML = this.musique.positionusa;
    document.getElementById("musique-topglobal").innerHTML = this.musique.topglobal;
    document.getElementById("musique-id").innerHTML = this.musique.id;
  }

}
