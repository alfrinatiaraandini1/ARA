import java.util.Scanner; // Mengimpor library Scanner

public class Main {
    public static void main(String[] args) {
        // Membuat objek Scanner untuk membaca input
        Scanner input = new Scanner(System.in);

        // Menampilkan Output (Prompt)
        System.out.print("Masukkan nama Anda: ");
        
        // Mengambil Input string
        String nama = input.nextLine();

        System.out.print("Masukkan umur Anda: ");
        
        // Mengambil Input angka (integer)
        int umur = input.nextInt();

        // Menampilkan Output akhir
        System.out.println("\n--- Hasil ---");
        System.out.println("Halo, " + nama + "!");
        System.out.println("Ternyata Anda berumur " + umur + " tahun.");
        
        // Menutup scanner (best practice)
        input.close();
    }
}