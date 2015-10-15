package archersysos;
import java.io.*;

public class ArcherSysOS{
    public static BufferedReader archerin = new BufferedReader(new InputStreamReader(System.in));
    public static PrintWriter archerout = new PrintWriter(new OutputStreamWriter(System.out));
    public static void printMessage(String msg){
        archerout.println(msg);
    }
}