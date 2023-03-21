package appli_utilisateur_pro.gui;

import java.awt.Desktop;
import java.io.File;
import java.io.IOException;

import appli_utilisateur_pro.application.Main;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;

public class GUIController {
	private Main appli;
	private Stage primaryStage;
	
	public void setApplication(Main main, Stage ps) {
		appli = main;
		primaryStage = ps;
	}
	
	@FXML void Afficher(ActionEvent event) {
		File fichier = new File(appli.getPathpdf());
		try {
			Desktop desktop = Desktop.getDesktop();
			desktop.open(fichier);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
    }
}
