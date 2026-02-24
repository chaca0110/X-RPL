
public class sepuluhRPL {

    
    public static void main(String[] args) {
        muridRPL objek= new muridRPL();
        System.out.println(objek.nama);
        System.out.println("nama anda adalah "+objek.nama);
        objek.nama="chaca";
        System.out.println(objek.nama);
        System.out.println(objek.absen=13 );
        System.out.println("");
        System.out.println("");
    
        objek.dataSISWA ();
        
        int tampilanLUAS=objek.menghitungPersegi();
        
        System.out.println("luas persegi adalah "+tampilanLUAS);
        
      
        siswaRPL obc= new siswaRPL();
        obc.hobiSISWA();
     
        
        int hasilvolume=obc.menghitungBALOK();
        System.out.println("volume balok adalah "+hasilvolume);
        
    }
    
}
