<?php

class Product
{
    protected int $prixHT;
    public int $tva;
    public int $prixTTC;
    public string $nom;
    public string $categorie;
    public int $stock;
    public string $description;

    public function __construct(int $prixHT, int $tva, string $nom, string $categorie, int $stock, string $description)
    {
        $this->prixHT = $prixHT;
        $this->tva = $tva;
        $this->prixTTC = $prixHT * (1 + $tva / 100);
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->stock = $stock;
        $this->description = $description;
    }

    public function calculerValorisationStock()
    {
        return number_format($this->stock * $this->prixHT, 2) . "€";
    }

    public function getPrice()
    {
        return number_format($this->prixHT, 2) . "€";
    }
}


// Lorsqu'on les modifie, la conversion en nombre à 
// virgule doit être automatique avant le stockage.