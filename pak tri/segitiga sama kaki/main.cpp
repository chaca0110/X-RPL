#include <iostream>

using namespace std;

int main()
{
    cout << "perulangan!" << endl<<endl;
    cout << "segitiga sama kaki"<<endl;
    //inputkan tinggi segitiga sama kaki:";
    //cin>>t;
       for (int i=1;i<=5 ; i++ )
       {
           for (int j=1;j<=i ; j++ )
           {
               cout<<" +";
           }
           cout<<endl;
       }
    return 0;
}
