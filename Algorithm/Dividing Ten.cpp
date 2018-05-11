#include<bits/stdc++.h>
using namespace std;

int main(){
	int inputan1;
	int temp;
	cout << "Masukkan angka: ";
	cin >> inputan1;
	temp = inputan1;
	int size = 0;
	while(temp!=0){
		temp /= 10;
		size++;
	}
	while(size != 0){
		size--;
		cout << (inputan1 / (int)pow(10,size)); 
		int temp1 = pow(10,size);
		for(int i = 0 ; i < size; i++){
			cout << "0";
		}
		cout << endl; 
		inputan1 %= temp1;
	}
	
}
