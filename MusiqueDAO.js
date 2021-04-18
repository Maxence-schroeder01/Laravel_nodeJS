class MusiqueDAO{
  constructor(){
    let listeMusiqueMemoire = [new Musique("Cyka Blyat", "DJ Blyatman & Russian Village Boys", "Hardbass russe", 1, "7 oct. 2018", "DJ Blyatman", "3.01", "inconnue", "inconnue", "inconnue"),
                              new Musique("Problems", "Don Diablo ft. John K ", "House", 2, "5 mars 2021", "HEXAGON", "3.00", "inconnue", "inconnue", "inconnue"),
                              new Musique("The Business", "Tiësto", "Bigroom", 3, "20 septembre 2020", "Musical Freedom", "2.44", "Disque D'or", "top 1", "top 2")];

    localStorage['musique'] = JSON.stringify(listeMusiqueMemoire);
    this.listeMusique = [];
  }

  lister(){
    this.listeMusique = [];
    let listeMusiqueMemoire = [];
    if(localStorage['musique']){
      listeMusiqueMemoire = JSON.parse(localStorage['musique']);
    }

    for(let position in listeMusiqueMemoire){
      let musique = new Musique(listeMusiqueMemoire[position].nom,
                              listeMusiqueMemoire[position].artiste,
                              listeMusiqueMemoire[position].style,
                              listeMusiqueMemoire[position].id,
                              listeMusiqueMemoire[position].datedesortie,
                              listeMusiqueMemoire[position].label,
                              listeMusiqueMemoire[position].duree,
                              listeMusiqueMemoire[position].certification,
                              listeMusiqueMemoire[position].positionusa,
                              listeMusiqueMemoire[position].topglobal);

      this.listeMusique.push(musique);
    }

    return this.listeMusique;

  }

  chercher(id){
    this.lister();
    return this.listeMusique.find(musique => musique.id === id);
  }

}
