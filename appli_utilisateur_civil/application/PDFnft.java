package appli_utilisateur_civil.application;

import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.nio.file.StandardOpenOption;
import java.sql.Blob;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;

import org.apache.commons.io.IOUtils;

import com.aspose.pdf.Document;
import com.aspose.pdf.TextFragment;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfReader;
import com.itextpdf.text.pdf.PdfWriter;
import com.itextpdf.text.pdf.parser.PdfTextExtractor;

import appli_utilisateur_civil.gui.MessageGUIController;
import blockchain.Blockchain;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Modality;
import javafx.stage.Stage;

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
	
	public Document creationCopiePDF(String _prenom,String _nom,String _dateNaissance) {
		String donnee = "";
		
		//création du document pdf
		Document document = new Document();
		//on ajoute une page au document
		com.aspose.pdf.Page page = document.getPages().add();
		
		donnee = "nom : " + _nom + "\n";
		donnee = donnee + "prenom : " + _prenom + "\n";
		donnee = donnee + "date de naissance : " + _dateNaissance;
		
		//on ecrit dans le pdf ce string
		page.getParagraphs().add(new TextFragment(donnee));
		
		//on sauvegarde le document pdf
		//document.save("test.pdf");

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
		public void recuperePDF(String BDD, String url, String user, String passwd, String code){
						
			try {
				Class.forName("com.mysql.cj.jdbc.Driver");
				conn = DriverManager.getConnection(url, user, passwd);
				
				//Déclaration de la connexion avec la bdd
				PreparedStatement pstmt = conn.prepareStatement("Select pdf,idDoc from NFT where code = ?");
				//Définir les paramètre de la fonction sql
				pstmt.setString(1, code);
				
				//L'objet ResultSet contient le résultat de la requête sql
				ResultSet result = pstmt.executeQuery();
				
				if(result.next()) {
					//Créer l'objet blob
					Blob  pdfBlob = result.getBlob("pdf");
					
					String pathPDF = "C:\\Users\\cyril\\eclipse-workspace\\Projet\\src\\appli_utilisateur_civil\\"+code;
					File outputFile = new File(pathPDF);
					FileOutputStream fout = new FileOutputStream(outputFile);
					IOUtils.copy(pdfBlob.getBinaryStream(), fout);
					fout.close();
				}
				
				pstmt.execute("DELETE FROM NFT WHERE code=\""+code+"\"");
				result.close();
				pstmt.close();
				conn.close();
				
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
			}		}
		
		public boolean verifNFT(int _idDoc, String _prenom, String _nom, String _dNaissance, String _lieuNaissance) {
			Blockchain bc = new Blockchain();
			return bc.trouveBloc(_idDoc, _prenom, _nom, _dNaissance, _lieuNaissance);
		}
		
		public void EnvoieNFT(String _pathPdf) {
			try {
				PdfReader pdf = new PdfReader(_pathPdf);
				int nbrPages = pdf.getNumberOfPages();

				String content= "";
				for(int i = 1; i <= nbrPages; i++) {
					content += PdfTextExtractor.getTextFromPage(pdf,i);
				}
				
				String contentSplit[] = content.split("\n");
				
				int idDoc = Integer.valueOf(contentSplit[1]);
				String nom = contentSplit[2].substring(6);
				String prenom = contentSplit[3].substring(9);
				String dateNaissance = contentSplit[4].substring(20);
				String lieuNaissance = contentSplit[5].substring(20);
				
				if(verifNFT(idDoc, prenom, nom, dateNaissance, lieuNaissance) == true) {
					Document copie = creationCopiePDF(prenom, nom, dateNaissance);
					copie.save("C:\\Users\\cyril\\eclipse-workspace\\Projet\\src\\appli_utilisateur_pro\\copie.pdf");
					copie.close();
				}else {
					FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/messageGUI.fxml"));
					Parent root = loader.load();
					
					MessageGUIController localController = loader.getController();
			    	Stage stage = new Stage();
					localController.setGUI(stage, "Le NFT est faux");
			    	stage.setScene(new Scene(root));
			    	stage.show();
				}
				
				pdf.close();
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
