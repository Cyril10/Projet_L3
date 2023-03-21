package appli_utilisateur_civil.gui;

import java.awt.Desktop;
import java.io.File;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import com.itextpdf.text.pdf.PdfReader;

import appli_utilisateur_civil.application.Main;
import blockchain.Blockchain;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TextField;
import javafx.stage.Modality;
import javafx.stage.Stage;

public class codeNFTController {
	private Main appli;
	private Stage thisStage;
	
	//0 si c'est pour envoyer le nft, 1 si c'est pour afficher le nft
	private int utilisation;
	
	private String BDD = "u785257224_TestV1";
	private String url = "jdbc:mysql://sql936.main-hosting.eu/" + BDD;
	private String user = "u785257224_cyril";
	private String passwd = "Cyril59330";
	
	public void setGUI(Main _appli, Stage stage, int _utilisation) {
		appli = _appli;
		thisStage = stage;
		utilisation = _utilisation;
	}
	
	@FXML private TextField code;

    @FXML void Valider(ActionEvent event) {
    	if(utilisation == 0) {
	    	try {
	    		String pathPdf = "C:\\Users\\cyril\\eclipse-workspace\\Projet\\src\\appli_utilisateur_civil\\"+code.getText();
	    		PdfReader pdf = new PdfReader(pathPdf);
	    		pdf.close();
	    		appli.setPathPdf(pathPdf);
	    		thisStage.close();
	    		appli.envoiPdf();
	    	}catch(Exception e) {
	    		try {
		    		FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/messageGUI.fxml"));
					Parent root = loader.load();
					
					MessageGUIController localController = loader.getController();
			    	Stage stage = new Stage();
					localController.setGUI(stage, "Code Faux");
			    	stage.setScene(new Scene(root));
			    	stage.initModality(Modality.APPLICATION_MODAL);
			    	stage.initOwner(thisStage);
			    	stage.show();
	    		}catch(Exception e2) {
	    			e2.printStackTrace();
	    		}
	    	}
    	}else {
    		String pathPdf = "C:\\Users\\cyril\\eclipse-workspace\\Projet\\src\\appli_utilisateur_civil\\"+code.getText();
    		File fichier = new File(pathPdf);
    		try {
    			if(!fichier.exists()) {
    				FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/messageGUI.fxml"));
					Parent root = loader.load();
					
					MessageGUIController localController = loader.getController();
			    	Stage stage = new Stage();
					localController.setGUI(stage, "Code Faux");
			    	stage.setScene(new Scene(root));
			    	stage.initModality(Modality.APPLICATION_MODAL);
			    	stage.initOwner(thisStage);
			    	stage.show();
    			}else {
    				Desktop desktop = Desktop.getDesktop();
    				desktop.open(fichier);
    			}
    		}catch(Exception e) {
    			e.printStackTrace();
    		}
    	}
    }
}
