#include <iostream>
using namespace std;

void Vetor(int *vetor, int entry){
    cout << "valores preenchidos: " << endl;
    for(int i = 0; i < entry; i++){
        cout << vetor[i] << endl;
    }

}

int main(){
    int entry;
    cout << "entre com o numero de indices: " << endl;
    cin >> entry;
    int *ptr = new int[entry]; // é preciso criar um ponteiro para alocação dinamica

    for(int i = 0;i < entry; i++){
        cout << "digite o valor para o indice " << i + 1 << endl;
        cin >> ptr[i];
    }

    Vetor(ptr, entry);

}