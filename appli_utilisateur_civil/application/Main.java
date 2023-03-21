package appli_utilisateur_civil.application;

import appli_utilisateur_civil.gui.GUIController;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class Main extends Application{
	private GUIController controller;
	private Stage primaryStage;
	
	private String BDD = "u785257224_TestV1";
	private String url = "jdbc:mysql://sql936.main-hosting.eu/" + BDD;
	private String user = "u785257224_cyril";
	private String passwd = "Cyril59330";
	
	String pathPdf;
	
	@Override
	public void start(Stage primaryStage) throws Exception {
		this.primaryStage = primaryStage;
		lauchGUI(primaryStage);
	}
	
	public void lauchGUI(Stage primaryStage) {
		try {
			FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/GUI.fxml"));
			Parent root= (Parent) loader.load();
			controller = loader.getController();
			controller.setApplication(this, primaryStage);
			Scene scene = new Scene(root);
			primaryStage.setScene(scene);
			primaryStage.setTitle("NFT d'idendite");
			primaryStage.show();
			
		}catch(Exception e) {
			e.printStackTrace();
		}
	}
	
	public void recupererNFT(String code) {
		PDFnft pdf = new PDFnft();
		pdf.recuperePDF(BDD, url, user, passwd, code);
	}
	
	public void envoiPdf() {
		PDFnft pdf = new PDFnft();
		pdf.EnvoieNFT(pathPdf);
	}
	
	public static void main(String[] args) {
		launch(args);
	}
	
	public void setPathPdf(String _pathPdf) {
		pathPdf = _pathPdf;
	}
	
	public String getPathPdf() {
		return pathPdf;
	}
}
