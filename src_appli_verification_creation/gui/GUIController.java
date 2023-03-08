package appli_verification_creation.gui;


import java.sql.*;

import appli_verification_creation.application.Main;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

public class GUIController{
	private Main appli;
	
	private String BDD = "u785257224_TestV1";
	private String url = "jdbc:mysql://sql936.main-hosting.eu/" + BDD;
	private String user = "u785257224_cyril";
	private String passwd = "Cyril59330";
	
 	@FXML private Label date_naissance;
 	@FXML private Label lieu_naissance;
    @FXML private Label nom;
    @FXML private Label prenom;
		
	public void setAffichageCarteIdentite() {
		try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection conn = DriverManager.getConnection(url, user, passwd);
			
			Statement state = conn.createStatement();
			ResultSet result = state.executeQuery("SELECT * FROM Donnees ORDER BY date_demande ASC LIMIT 1");
			
			if(result.next()){
				nom.setText(result.getObject(1).toString());
				prenom.setText(result.getObject(2).toString());
				date_naissance.setText(result.getObject(3).toString());
				lieu_naissance.setText(result.getObject(4).toString());
			}
			
			result.close();
			state.close();
		}catch(Exception e) {
			e.printStackTrace();
		}
	}
	
	@FXML
    void validation(ActionEvent event) {
		appli.creationDuPDF(nom.toString(), prenom.toString(), date_naissance.toString(), lieu_naissance.toString());
    }
	
	public void setApplication(Main _appli) {
		appli = _appli;
	}
	
	public void lauchConfirmation(String messageConfirmation) {
		try {
			Label label = new Label(messageConfirmation);

			StackPane secondaryLayout = new StackPane();
			secondaryLayout.getChildren().add(label);

			Scene secondScene = new Scene(secondaryLayout, 400, 200);

			// New window (Stage)
			Stage fenetreConfirmation = new Stage();
			fenetreConfirmation.setScene(secondScene);

			fenetreConfirmation.show();
			
		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
}
