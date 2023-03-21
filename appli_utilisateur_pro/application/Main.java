package appli_utilisateur_pro.application;

import appli_utilisateur_pro.gui.GUIController;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class Main extends Application{
	private GUIController controller;
	private Stage primaryStage;
	
	String pathPdf = "C:\\Users\\\\cyril\\eclipse-workspace\\Projet\\src\\appli_utilisateur_pro\\copie.pdf";
	
	@Override
	public void start(Stage primaryStage) throws Exception{
		this.primaryStage = primaryStage;
		lauchGUI();
	}
	
	public void lauchGUI() {
		try {
			FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_pro/gui/GUI.fxml"));
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
	
	public static void main(String[] args) {
		launch(args);
	}
	
	public String getPathpdf() {
		return pathPdf;
	}
}
