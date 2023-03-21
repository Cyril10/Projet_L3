package appli_utilisateur_civil.gui;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

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

public class CodeRecuperationNFTController {
	private Main appli;
	private Stage thisStage;
	
	private String BDD = "u785257224_TestV1";
	private String url = "jdbc:mysql://sql936.main-hosting.eu/" + BDD;
	private String user = "u785257224_cyril";
	private String passwd = "Cyril59330";
	
	public void setGUI(Main _appli, Stage stage) {
		appli = _appli;
		thisStage = stage;
	}
	
	@FXML private TextField code;

    @FXML void Demande(ActionEvent event) {
    	try {
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection conn = DriverManager.getConnection(url, user, passwd);
			
			String sql = "SELECT * FROM NFT where code = \""+code.getText()+"\";";
			Statement state = conn.createStatement();
			ResultSet result = state.executeQuery(sql);
			
			if(result.next() == false) {
				FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/messageGUI.fxml"));
				Parent root = loader.load();
				
				MessageGUIController localController = loader.getController();
		    	Stage stage = new Stage();
				localController.setGUI(stage, "Le code entrer n'est pas bon");
		    	stage.setScene(new Scene(root));
		    	stage.initModality(Modality.APPLICATION_MODAL);
		    	stage.initOwner(thisStage);
		    	stage.show();
			}else {
				appli.recupererNFT(code.getText());
				
				int idDoc = Integer.parseInt(result.getObject(3).toString());
				Blockchain bc = new Blockchain();
				bc.ajouterBlock(idDoc, result.getObject(4).toString(), result.getObject(5).toString(), result.getObject(6).toString(), result.getObject(7).toString());
				bc.MaJBlockchainTXT();
				
				FXMLLoader loader = new FXMLLoader(getClass().getClassLoader().getResource("appli_utilisateur_civil/gui/messageGUI.fxml"));
				Parent root = loader.load();
				
				MessageGUIController localController = loader.getController();
		    	Stage stage = new Stage();
				localController.setGUI(stage, "Le NFT a bien été importer");
		    	stage.setScene(new Scene(root));
		    	stage.initModality(Modality.APPLICATION_MODAL);
		    	stage.initOwner(thisStage);
		    	stage.show();
			}
			
	    }catch(Exception e) {
			e.printStackTrace();
		}
    }
}
