#include <iostream>
#include <string>
using namespace std;

int main() {
    string user;
    int hari, bulan;

    cout << "=== CEK ZODIAK DARI TANGGAL LAHIR ===\n";

    cout << "Tanggal lahir (1-31)      : ";
    cin >> hari;
    cout << "Bulan lahir (1-12)        : ";
    cin >> bulan;


    int batas;
    if (bulan == 1 || bulan == 3 || bulan == 5 || bulan == 7 || bulan == 8 || bulan == 10 || bulan == 12)
        batas = 31;
    else if (bulan == 4 || bulan == 6 || bulan == 9 || bulan == 11)
        batas = 30;
    else if (bulan == 2)
        batas = 28;
    else {
        cout << "\nBulan tidak valid!\n";
        return 0;
    }


    if (hari < 1 || hari > batas) {
        cout << "\nTanggal tidak sesuai dengan bulan!\n";
        return 0;
    }


    string z;
    if ((bulan == 3 && hari >= 21) || (bulan == 4 && hari <= 19))
        z = "Aries";
    else if ((bulan == 4 && hari >= 20) || (bulan == 5 && hari <= 20))
        z = "Taurus";
    else if ((bulan == 5 && hari >= 21) || (bulan == 6 && hari <= 20))
        z = "Gemini";
    else if ((bulan == 6 && hari >= 21) || (bulan == 7 && hari <= 22))
        z = "Cancer";
    else if ((bulan == 7 && hari >= 23) || (bulan == 8 && hari <= 22))
        z = "Leo";
    else if ((bulan == 8 && hari >= 23) || (bulan == 9 && hari <= 22))
        z = "Virgo";
    else if ((bulan == 9 && hari >= 23) || (bulan == 10 && hari <= 22))
        z = "Libra";
    else if ((bulan == 10 && hari >= 23) || (bulan == 11 && hari <= 21))
        z = "Scorpio";
    else if ((bulan == 11 && hari >= 22) || (bulan == 12 && hari <= 21))
        z = "Sagitarius";
    else if ((bulan == 12 && hari >= 22) || (bulan == 1 && hari <= 19))
        z = "Capricorn";
    else if ((bulan == 1 && hari >= 20) || (bulan == 2 && hari <= 18))
        z = "Aquarius";
    else if ((bulan == 2 && hari >= 19) || (bulan == 3 && hari <= 20))
        z = "Pisces";
    else
        z = "Tidak diketahui";



    cout << "Zodiak kamu adalah: " << z << endl;

    return 0;
}
