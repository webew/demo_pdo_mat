import Produit from "./Produit.js";

const response = await fetch("data.php");
const produits = await response.json();// chaine de caractères [{id:"1",nomProduit:"truc"},{}]

produits.forEach(produitJson => {//produitJson a la structure {id:"1",nomProduit:"truc"}
    const prod = new Produit(produitJson.id, produitJson.nomProduit, produitJson.prixProduit);
    prod.afficher();
});