package appli_utilisateur_civil.gui;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Label;
import javafx.stage.Stage;

public class MessageGUIController {
	@FXML private Label message;
	
	Stage thisStage;
	
	public void setGUI(Stage stage, String msg) {
		thisStage = stage;
		message.setText(msg);
	}
	
    @FXML void close(ActionEvent event) {
    	thisStage.close();
    }
}
