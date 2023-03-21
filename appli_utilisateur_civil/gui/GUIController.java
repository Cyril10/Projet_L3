package appli_utilisateur_civil.gui;

import java.awt.Desktop;
import java.io.File;
import java.io.IOException;

import appli_utilisateur_civil.application.Main;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Modality;
import javafx.stage.Stage;

public class GUIController {
	private Main appli;
	private Stage primaryStage;
	
	public void setApplication(Main _appli, Stage ps) {
		appli = _appli;
		primaryStage = ps;
	}
	
	@FXML void recuperationNFT(ActionEvent event) {
		try {
			FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/codeRecuperationNFT.fxml"));
			Parent root = loader.load();
			
			CodeRecuperationNFTController localController = loader.getController();
	    	Stage stage = new Stage();
			localController.setGUI(appli, stage);
	    	stage.setScene(new Scene(root));
	    	stage.initModality(Modality.APPLICATION_MODAL);
	    	stage.initOwner(primaryStage);
	    	stage.show();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
    }
	
	@FXML void EnvoiNFT(ActionEvent event) {
		try {
			FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/codeNFT.fxml"));
			Parent root = loader.load();
			
			codeNFTController localController = loader.getController();
	    	Stage stage = new Stage();
			localController.setGUI(appli, stage, 0);
	    	stage.setScene(new Scene(root));
	    	stage.initModality(Modality.APPLICATION_MODAL);
	    	stage.initOwner(primaryStage);
	    	stage.show();
		}catch(Exception e) {
			e.printStackTrace();
		}
    }

    @FXML void VisualisationNFT(ActionEvent event) {
		try {
			FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/codeNFT.fxml"));
			Parent root = loader.load();
			
			codeNFTController localController = loader.getController();
	    	Stage stage = new Stage();
			localController.setGUI(appli, stage, 1);
	    	stage.setScene(new Scene(root));
	    	stage.initModality(Modality.APPLICATION_MODAL);
	    	stage.initOwner(primaryStage);
	    	stage.show();
	    	
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
    }

    
}
