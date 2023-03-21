package blockchain;

public class Block {
	private int id;
	private int idDoc;
	private String prenom;
	private String nom;
	private String dateNaissance;
	private String lieuNaissance;
	private Block precedent;
	
	public Block(int _id, int _idDoc, String _prenom, String _nom, String _dateNaissance, String _lieuNaissance, Block _precedent) {
		id = _id;
		idDoc = _idDoc;
		prenom = _prenom;
		nom = _nom;
		dateNaissance = _dateNaissance;
		lieuNaissance = _lieuNaissance;
		precedent = _precedent;
	}
	
	public Block(int _idDoc, String _prenom, String _nom, String _dateNaissance, String _lieuNaissance, Block _precedent) {
		id = _precedent != null ? _precedent.getId()+1 : 0;
		idDoc = _idDoc;
		prenom = _prenom;
		nom = _nom;
		dateNaissance = _dateNaissance;
		lieuNaissance = _lieuNaissance;
		precedent = _precedent;
	}
	
	public void afficherBlock() {
		System.out.println("------------------------------------------------------------------------------");
		System.out.println("numero du bloc : "+id);
		System.out.println("id du document : "+idDoc);
		System.out.println("prenom du receveur : "+prenom);
		System.out.println("nom du receveur : "+nom);
		System.out.println("date de naissance du receveur : "+dateNaissance);
		System.out.println("lieu de naissance du receveur : "+lieuNaissance);
	}
	
	public Block getPrecedent() {
		return precedent;
	}

	public int getId() {
		return id;
	}

	public int getIdDoc() {
		return idDoc;
	}

	public String getPrenom() {
		return prenom;
	}

	public String getNom() {
		return nom;
	}

	public String getDateNaissance() {
		return dateNaissance;
	}

	public String getLieuNaissance() {
		return lieuNaissance;
	}
}
