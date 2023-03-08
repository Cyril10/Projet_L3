package appli_verification_creation.application;

import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.sql.Blob;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Scanner;

import com.aspose.pdf.Document;
import com.aspose.pdf.TextFragment;

public class PDFnft {
	//donnée pour se connecter a la BDD
	static Connection conn;
	static Statement state;
	static ResultSet result;
	static ResultSetMetaData resulMeta;
	static Object[][] donn;
	static String[] champs;
	static Object[] val;
	static String tableBDD = "u785257224_TestV1";
	
	private String name;
	
	private Document document;
	
	//Permet de créer le pdf a partir des donnée de la BDD donnees
	public Document creationDuPDF(String BDD, String url, String user, String passwd) {
		
		String donnee = "";
		
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			conn = DriverManager.getConnection(url, user, passwd);
			//System.out.println("Connecter");
			
			//création du document pdf
			document = new Document();
			//on ajoute une page au document
			com.aspose.pdf.Page page = document.getPages().add();
			
			//Déclaration de la connexion avec la bdd
			Statement state = conn.createStatement();
			//L'objet ResultSet contient le résultat de la requête sql
			ResultSet result = state.executeQuery("SELECT * FROM Donnees ORDER BY date_demande ASC LIMIT 1");
			//On récupère les MetaData
			//ResultSetMetaData resultMeta = result.getMetaData();
			
			//on met dans le string ce qu'il y a a ecrire dans pdf
			if(result.next()) {
				name = result.getObject(1).toString() + "_"+result.getObject(2).toString()+".pdf";
				donnee = "nom : " + result.getObject(1).toString() + "\n";
				donnee = donnee + "prenom : " + result.getObject(2).toString() + "\n";
				donnee = donnee + "date de naissance : " + result.getObject(3).toString() + "\n";
				donnee = donnee + "lieu de naissance : " + result.getObject(4).toString() + "\n";
			}
			
			//on supprime les données qu'on vient d'utiliser dans la base de donnée
			state.executeUpdate("DELETE FROM Donnees ORDER BY date_demande ASC LIMIT 1");
			
			//on ferme ca
			result.close();
			state.close();
			
			//on ecrit dans le pdf ce string
			page.getParagraphs().add(new TextFragment(donnee));
			
			//on sauvegarde le document pdf
			//document.save("test.pdf");
			
		} catch(Exception e){
			e.printStackTrace();
			System.out.println("Erreur");
			System.exit(0);
		}
		return document;
	}
	
	//Permet d'envoyer le pdf vers la BDD NFT
	public void envoiePDFBdd(String BDD, String url, String user, String passwd, String docPath) {

        try {
            // Création d'un objet File pour le fichier PDF
            File pdfFile = new File(docPath);

            // Convertir le fichier PDF en tableau de bytes
            FileInputStream fis = new FileInputStream(pdfFile);
            ByteArrayOutputStream baos = new ByteArrayOutputStream();
            byte[] buffer = new byte[1024];
            int length;
            while ((length = fis.read(buffer)) != -1) {
                baos.write(buffer, 0, length);
            }
            byte[] pdfBytes = baos.toByteArray();

            // Configuration de la connexion à la base de données
            Connection conn = DriverManager.getConnection(url, user, passwd);

            // Préparation de la requête SQL pour insérer le PDF dans la base de données
            String sql = "INSERT INTO NFT (nom, pdf) VALUES (?, ?)";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setString(1, pdfFile.getName());
            stmt.setBytes(2, pdfBytes);

            // Exécution de la requête SQL
            stmt.executeUpdate();

            // Fermeture de la connexion et du flux d'entrée
            fis.close();
            baos.close();
            stmt.close();
            conn.close();

            pdfFile.delete();
        } catch (IOException e) {
            e.printStackTrace();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
	
	//On récupère le pdf de la BDD NFT
	public void recuperePDF(){
		String BDD = "u785257224_TestV1";
		String url = "jdbc:mysql://sql936.main-hosting.eu/" + BDD;
		String user = "u785257224_cyril";
		String passwd = "Cyril59330";
		
		String prenom_demandeur;
		String nom_demandeur;
		String nom_pdf;
		
		try (//entrer prenom et nom avec maj en premiere lettre et min le reste
		Scanner sc = new Scanner(System.in)) {
			System.out.println("Veuillez saisir votre prenom :");
			prenom_demandeur = sc.nextLine();
			System.out.println("Veuillez saisir votre nom :");
			nom_demandeur = sc.nextLine();
		}
		nom_pdf = nom_demandeur + "_"+ prenom_demandeur + ".pdf";
		System.out.println("nom du pdf : "+nom_pdf);
		
		
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			conn = DriverManager.getConnection(url, user, passwd);
			
			//Déclaration de la connexion avec la bdd
			PreparedStatement pstmt = conn.prepareStatement("Select pdf from NFT where nom = ?");
			//Définir les paramètre de la fonction sql
			pstmt.setString(1, nom_pdf);
			
			//L'objet ResultSet contient le résultat de la requête sql
			ResultSet result = pstmt.executeQuery();
			
			if(result.next()) {
				//Créer l'objet blob
				Blob  pdfBlob = result.getBlob("pdf");
				
				//Lire les données du blob et les écrire dans un fichier pdf
				InputStream is = pdfBlob.getBinaryStream();
				FileOutputStream fos = new FileOutputStream(nom_pdf);
				byte[] buffer = new byte[1024];
				while(is.read(buffer)>0) {
					fos.write(buffer);
				}
				fos.close();
				is.close();
				
				
			}
			
			
        } catch (SQLException e) {
            e.printStackTrace();
        } catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	//getter and setter
	public String getName() {
		return name;
	}
}
