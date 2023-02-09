#include "liste_blockchain/list_blockchain.h"
#include <stdio.h>

int main(){
    
    return 0;
}

void testRecupEtEcritureBlockChain(){
    bloc *chaine = NULL;
    RecupererBlockChain(&chaine);
    chaine = ajouter_bloc(chaine, ((chaine->id)+1), 45631, "Gosselin", "Clementine", "01/01/2001", "04h35");
    MaJBlockChainTXT1(chaine);
}