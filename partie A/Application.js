class Application {
  constructor(window, vueListeMusique, vueMusique, musiqueDAO){

    this.window = window;

    this.vueListeMusique = vueListeMusique;

    this.vueMusique = vueMusique;

    this.musiqueDAO = musiqueDAO;

    this.window.addEventListener("hashchange", () =>this.naviguer());

    this.naviguer();
  }

  naviguer(){
    let hash = window.location.hash;

    if(!hash){

      this.vueListeMusique.initialiserListeMusique(this.musiqueDAO.lister());
      this.vueListeMusique.afficher();

    }else{

      let navigation = hash.match(/^#musique\/([0-9]+)/);
      let idMusique = navigation[1];

      let musique = this.musiqueDAO.chercher(parseInt(idMusique))
      this.vueMusique.initialiserMusique(musique);
      this.vueMusique.afficher();

    }
  }

}

new Application(window, new VueListeMusique(), new VueMusique(), new MusiqueDAO());

