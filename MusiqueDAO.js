class MusiqueDAO{
  constructor(){
    let listeMusiqueMemoire = [new Musique("Cyka Blyat", "DJ Blyatman & Russian Village Boys", "Hardbass russe", 0),
                              new Musique("Problems", "Don Diablo ft. John K ", "House", 1),
                              new Musique("The Business", "Tiësto", "Bigroom", 2)];

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
                              listeMusiqueMemoire[position].id);

      this.listeMusique.push(musique);
    }

    return this.listeMusique;

  }

  chercher(id){
    this.lister();
    return this.listeMusique.find(musique => musique.id === id);
  }

}
