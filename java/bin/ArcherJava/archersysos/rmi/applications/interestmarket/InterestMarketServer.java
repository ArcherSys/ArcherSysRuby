package archersysos.rmi.applications.interestmarket;
import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.io.*;

public class InterestMarketServer extends UnicastRemoteObject implements RemoteInterestMarketServer{
      /**
	 * 
	 */
	private static final long serialVersionUID = -1788131095043644042L;
	public InterestMarketServer() throws RemoteException{}
   public float getInterest(double principal,double rate,double timeElapsedInYears,double numberOfCompounds) throws RemoteException{
             Double factorone = rate / numberOfCompounds;
             Double factortwo = 1 + factorone;
             Double factorthree = principal * factortwo;
             return (float) Math.pow(factorthree,(numberOfCompounds * timeElapsedInYears));

}  public static void main(String args[]){
  try{ 
    RemoteInterestMarketServer server = new InterestMarketServer();
    Naming.rebind("archerjava_InterestServer",server);
    } catch(java.io.IOException e){
    }System.out.println("Error");
    }
}

