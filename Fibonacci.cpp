#include<bits/stdc++.h>
using namespace std;

int main(){
	int inputan1;
	//Program menampilkan bilangan fibonacci sebanyak inputan1
	cout << "Masukkan batas: ";
	cin >> inputan1;
	int angka1 = 1, angka2 = 1;
	cout << angka1 << " " << angka2 << " ";
	for(int i = 2; i < inputan1 ; i++){
		cout << angka1 + angka2 << " ";
		int temp = angka1;
		angka1 = angka2;
		angka2 = temp + angka2;
	}
}
