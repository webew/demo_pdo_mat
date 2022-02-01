export default class Produit {
    id;
    nomProduit;
    prixProduit;

    constructor(id, nom, prix) {
        this.id = id;
        this.nomProduit = nom;
        this.prixProduit = prix;
    }

    afficher() {
        //on crée plein de html pour afficher le produit
    }
}