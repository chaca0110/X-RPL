
package belajarjava;

import java.util.Scanner;

public class belajarinputoutput {

    
    public static void main(String[] args) {
       
        Scanner inputUser= new Scanner(System.in) ;
          System.out.print ("Inputkan nama anda:");
        String nama= inputUser.nextLine();
          System.out.println("nama yang di input: "+nama);
        
          System.out.print("berapakah nomer absen anda: ");
        int absen= inputUser.nextInt ();
          System.out.print("nomer absen anda: "+absen);
          
          System.out.print("berapakah uang sakuku: ");
        double uang= inputUser.nextDouble();
          System.out.println("uang sakuku adalah Rp."+uang);
          
          Scanner masukan= new Scanner(System.in);
          System.out.print("karakter apa yg anda suka: ");
        String simbol= inputUser.nextLine();
          System.out.println("karakter yg anda suka "+simbol);
          
          
          
          
    }
    
}
