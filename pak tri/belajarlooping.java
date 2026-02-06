
package belajarjava;

import java.util.Scanner;


public class belajarlooping {

    
    public static void main(String[] args) {
         System.out.println("masukkan nomer urut: ");
        Scanner input1 = new Scanner(System.in);
        int angka = input1.nextInt();


        System.out.println("masukkan kalimat atau kata: ");
        Scanner nama = new Scanner(System.in);
        String kata = nama.nextLine();
        for (int i = 1; i <= angka; i++) {
            System.out.println(i + ". " + kata);
        }


        Scanner tinggi = new Scanner(System.in);
        System.out.println("masukkan tinggi segitiga: ");
        int n = tinggi.nextInt();
        
        // Segitiga 1
        System.out.println("\n");
        System.out.println("segitiga kiri bawah");
        for (int i = 1; i <= n; i++) {
            for (int j = 1; j <= i; j++) {
                System.out.print("* ");
            }
            System.out.println();
        }

        
         // Segitiga 2
        System.out.println("\n");
        System.out.println("segitiga kiri atas");
        for (int i = n; i >= 1; i--) {
            for (int j = 1; j <= i; j++) {
                System.out.print("* ");
            }
            System.out.println();
        }
        
        
        // Segitiga 3
        System.out.println("\n");
        System.out.println("segitiga kanan bawah");
        for (int i = 1; i <= n; i++) {
            for (int j = 1; j <= n - i; j++) {
                System.out.print(" ");
            }
            for (int j = 1; j <= i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }


       

        
        input1.close();
        nama.close();
        tinggi.close();
    }
}
       
        
        
        
        
        
        
    
    

