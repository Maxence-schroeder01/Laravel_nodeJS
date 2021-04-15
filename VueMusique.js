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
  }

}
