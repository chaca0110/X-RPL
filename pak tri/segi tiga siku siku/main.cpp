#include <iostream>

using namespace std;

int main()
{
    cout << "perulangan!" << endl << endl;
    cout << "bangun segitiga siku-siku" << endl;
    cout << "inputkan tinggi segitiga";

    for (int i = 1; i <= 5; i++)
    {
        cout << "o";

        for (int j = 5; j >= i; j--)
        {
            cout << "+";
        }

        cout << endl;
    }

    return 0;
}
