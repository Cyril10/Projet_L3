#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "list_blockchain.h"

bloc* creer_bloc(int i, int i_d, char *p, char *n, char *date, char *heure){
    bloc *nouveau = (bloc *)malloc(sizeof(bloc));
    if(!nouveau){
        exit(EXIT_FAILURE);
    }else{
        nouveau->id = i;
        nouveau->id_doc = i_d;
        nouveau->prenom = (char *)calloc(strlen(p), sizeof(char));
        strcpy(nouveau->prenom, p);
        nouveau->nom = (char *)calloc(strlen(n), sizeof(char));
        strcpy(nouveau->nom, n);
        nouveau->date_naissance = (char *)calloc(strlen(date), sizeof(char));
        strcpy(nouveau->date_naissance, date);
        nouveau->heure_naissance = (char *)calloc(strlen(heure), sizeof(char));
        strcpy(nouveau->heure_naissance, heure);
        nouveau->precedent = NULL;
        return nouveau;
    }
}

void afficher_bloc(bloc b){
    printf("numero du bloc : %d\n id du doc : %d\n nom : %s\n prenom : %s\n date de naissance : %s\n heure de naissance : %s",
            b.id, b.id_doc, b.nom, b.prenom, b.date_naissance, b.heure_naissance);
}

bloc* ajouter_bloc(bloc *chaine, int i, int i_d, char *n, char *p, char *date, char *heure){
    bloc *nouveau = creer_bloc(i, i_d, p, n, date, heure);
    nouveau->precedent = chaine;
    return nouveau;
}

void afficher_chaine(bloc b){
    bloc *courant = &b;
    while(courant){
        afficher_bloc(*courant);
        printf("\n");
        courant = courant->precedent;
    }
}

//Permet de créer la liste chainé a partir du fichier blockchain.txt
//(permet de sauvegarder la blockchain) 
void RecupererBlockChain(bloc **chaine){
    FILE *f_blockchain = NULL;

    char nomTemp[255], prenomTemp[255], dateTemp[255], heureTemp[255];
    char c;
    int idTemp, idDocTemp;

    f_blockchain = fopen("liste_blockchain/blockchain.txt", "r");
    if(f_blockchain){
        while(c!=EOF){
            fscanf(f_blockchain, "%d", &idTemp);

            //permet d'avancer le pointeur de 1
            fseek(f_blockchain, 1, SEEK_CUR);
            fscanf(f_blockchain, "%d", &idDocTemp);

            fseek(f_blockchain, 1, SEEK_CUR);
            fscanf(f_blockchain, "%s", nomTemp);

            fseek(f_blockchain, 1, SEEK_CUR);
            fscanf(f_blockchain, "%s", prenomTemp);

            fseek(f_blockchain, 1, SEEK_CUR);
            fscanf(f_blockchain, "%s", dateTemp);

            fseek(f_blockchain, 1, SEEK_CUR);
            fscanf(f_blockchain, "%s", heureTemp);

            *chaine = ajouter_bloc(*chaine, idTemp, idDocTemp, prenomTemp, nomTemp, dateTemp, heureTemp);

            fseek(f_blockchain, 1, SEEK_CUR);
            c = fgetc(f_blockchain);
        }
    }else{
        printf("erreur a l'ouverture du fichier blockchain.txt");
    }
    fclose(f_blockchain);
}

void MaJBlockChainTXT2(bloc *chaine, FILE *f_blockchain, int index){
    if(chaine){
        MaJBlockChainTXT2(chaine->precedent, f_blockchain, 0);
        fprintf(f_blockchain, "%d %d %s %s %s %s", chaine->id, chaine->id_doc, chaine->nom, chaine->prenom, chaine->date_naissance, chaine->heure_naissance);
        if(index == 0){fprintf(f_blockchain, "\n");}
    }
}

void MaJBlockChainTXT1(bloc *chaine){
    FILE *f_blockchain = NULL;

    f_blockchain = fopen("liste_blockchain/blockchain.txt", "w+");
    if(f_blockchain){
        MaJBlockChainTXT2(chaine, f_blockchain, 1);
    }else{
        printf("erreur lors de la copie de la blockchain sur le fichier blockchain.txt");
    }
    fclose(f_blockchain);
}