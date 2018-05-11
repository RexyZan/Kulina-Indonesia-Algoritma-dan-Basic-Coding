#include<bits/stdc++.h>
using namespace std;

int main(){
	int inputan1, inputan2;
	//Program pertama menampilkan bilangan prima sebanyak inputan1
	cout << "Masukkan batas: ";
	cin >> inputan1;
	for(int i = 2; i <= inputan1; i++){
		int temp = 0;
		for(int j = 1; j <= i; j++){
			if(i % j == 0){
				temp++;
			}
		}
		if(temp == 2){
			cout << i << " ";
			temp = 0;
		}
	}
	//Program kedua meminta inputan user untuk dicek apakah bilangan tersebut prima atau bukan
	cout << endl << endl;
	cout << "Masukkan angka yang ingin dicek: ";
	cin >> inputan2;
	int temp = 0;
	for(int i = 1; i <= inputan2; i++){
		if(inputan2 % i == 0){
			temp++;
		}
	}
	if(temp == 2){
		cout << inputan2 << " adalah bilangan prima";
	}
	else{
		cout << inputan2 << " bukan bilangan prima";
	}
	
}
