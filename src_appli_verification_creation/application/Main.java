package appli_verification_creation.application;

import com.aspose.pdf.Document;

import appli_verification_creation.gui.GUIController;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;



public class Main extends Application{
	GUIController controller;
	
	private String BDD = "u785257224_TestV1";
	private String url = "jdbc:mysql://sql936.main-hosting.eu/" + BDD;
	private String user = "u785257224_cyril";
	private String passwd = "Cyril59330";
	
	public void start(Stage primaryStage) throws Exception{
		lauchGUI(primaryStage);
		controller.setAffichageCarteIdentite();
	}
	
	public void lauchGUI(Stage primaryStage) {
		try {
			FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_verification_creation/gui/appliGUI.fxml"));
			Parent root= (Parent) loader.load();
			controller = loader.getController();
			controller.setApplication(this);
			
			
			Scene scene = new Scene(root);
			primaryStage.setScene(scene);
			primaryStage.setTitle("Verification et Creation du Document");
			primaryStage.show();
			
		}catch(Exception e) {
			e.printStackTrace();
		}
	}
	
	public void creationDuPDF(String nom, String prenom, String date_naissance, String lieu_naissance) {
		String messageConfirmation;
		try{
			PDFnft pdf = new PDFnft();
			Document document = pdf.creationDuPDF(BDD, url, user, passwd);
			String docPath = "src\\appli_verification_creation\\"+pdf.getName();
			document.save(docPath);
			pdf.envoiePDFBdd(BDD, url, user, passwd, docPath);
			messageConfirmation = "Le document a bien été créer et envoyer dans la base de donnée.";
			
		}catch(Exception e) {
			e.getStackTrace();
			messageConfirmation = "Il y a eu une erreur lors de la création ou lors de l'envoie du document.";
		}
		controller.lauchConfirmation(messageConfirmation);
		controller.setAffichageCarteIdentite();
	}
	
	public static void main(String[] args) {
		launch(args);
	}

	//public static void main(String[] args) {
		//Créer le pdf a partir de la bdd donnees et l'envoyer sur la bdd nft
		/*PDFnft test = new PDFnft();
		Document document = test.creationDuPDF();
		document.save(test.getName());
		test.envoiePDFBdd(test.getName());*/
		
		//Recuperer le pdf a partir de la bdd nft
		/*PDFnft test = new PDFnft();
		test.recuperePDF();*/
	//}

}
