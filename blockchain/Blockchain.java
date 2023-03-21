package blockchain;

import java.io.*;

public class Blockchain {
	private Block dernier;
	private Block genesis;
	
	public Blockchain() {
		boolean genesisBlock = true;
		try {
			//on ouvre le fichier
			File file = new File("src\\blockchain\\blockchain.txt");
			FileReader fileReader = new FileReader(file);
			
			BufferedReader br = new BufferedReader(fileReader);

			String ligne = br.readLine();
			//On lit dans le fichier tant que on est pas arrivé a la fin
			while(ligne != null) {
				//on sépare les donne grace au espaces
				String[] donnee = ligne.split(" ");
				
				int temp0 = Integer.valueOf(donnee[0]);
				int temp1 = Integer.valueOf(donnee[1]);
				ajouterBlock(temp0, temp1, donnee[2], donnee[3], donnee[4], donnee[5]);
				if(genesisBlock == true) {
					genesis = dernier;
					genesisBlock = false;
				}
				ligne = br.readLine();
			}
			br.close();
			
		}catch (FileNotFoundException e) {
			e.printStackTrace();
		}catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	public void MaJBlockchainTXT() {
		try {
			FileWriter fw = new FileWriter("src\\blockchain\\blockchain.txt");
			BufferedWriter bw = new BufferedWriter(fw);
			PrintWriter pw = new PrintWriter(bw);
			
			int tailleBlockchain = nbBlock() - 1;
			int compteur = 0;
			Block courant = dernier;
			while(compteur <= tailleBlockchain) {
				for(int i = 0; i < tailleBlockchain - compteur; i++) {
					courant = courant.getPrecedent();
				}

				pw.println(courant.getId()+" "+courant.getIdDoc()+" "+courant.getPrenom()+" "+courant.getNom()+" "+courant.getDateNaissance()+" "+courant.getLieuNaissance());
				compteur++;
				courant = dernier;
			}
			pw.close();
		}catch(IOException e) {
			e.printStackTrace();
		}
	}
	
	public boolean trouveBloc(int _idDoc, String _prenom, String _nom, String _dNaissance, String _lieuNaissance) {
		Block courant = dernier;
		while(courant != null) {
			if(courant.getIdDoc() == _idDoc) {
				if(courant.getNom().equals(_nom) && courant.getPrenom().equals(_prenom) && courant.getDateNaissance().equals(_dNaissance) && courant.getLieuNaissance().equals(_lieuNaissance)) {
					return true;
				}
			}
			courant = courant.getPrecedent();
		}
		return false;
	}
	
	public void ajouterBlock(int _id, int _idDoc, String _prenom, String _nom, String _dateNaissance, String _lieuNaissance) {
		Block block = new Block(_id, _idDoc, _prenom, _nom, _dateNaissance, _lieuNaissance, dernier);
		dernier = block;
	}
	
	public void ajouterBlock(int _idDoc, String _prenom, String _nom, String _dateNaissance, String _lieuNaissance) {
		Block block = new Block(_idDoc, _prenom, _nom, _dateNaissance, _lieuNaissance, dernier);
		dernier = block;
	}
	
	public void afficherChaine() {
		Block courant = dernier;
		while(courant != null) {
			courant.afficherBlock();
			courant = courant.getPrecedent();
		}
	}
	
	public Block getDernier() {
		return dernier;
	}
	
	public int nbBlock() {
		Block courant = dernier;
		int compteur = 0;
		while(courant != null) {
			compteur++;
			courant = courant.getPrecedent();
		}
		return compteur;
	}
}
