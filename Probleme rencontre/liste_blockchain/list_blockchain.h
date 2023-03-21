#ifndef LIST_BLOCKCHAIN_H_INCLUDED
#define LIST_BLOCKCHAIN_H_INCLUDED
#include <stdio.h>

typedef struct Bloc_{
    int id;
    int id_doc;
    char *prenom;
    char *nom;
    char *date_naissance;
    char *heure_naissance;
    struct Bloc_ *precedent;
} bloc;

bloc* creer_bloc(int i, int i_d, char *p, char *n, char *date, char *heure);

void afficher_bloc(bloc b);

bloc* ajouter_bloc(bloc *chaine, int i, int i_d, char *n, char *p, char *date, char *heure);

void afficher_chaine(bloc b);

void RecupererBlockChain(bloc **chaine);

//permet d'ecrire dans un fichier txt la blockchain
//index permet de savoir si on est sur la dernière ligne ou non (pour éviter de mettre \n)
void MaJBlockChainTXT2(bloc *chaine, FILE *f_blockchain, int index);

//permet d'ouvrir le fichier txt en mode "w+" pour MaJBlockChainTXT2
void MaJBlockChainTXT1(bloc *chaine);

#endif