#include <iostream>

using namespace std; 
 
int main(int argc, char *argv[]) 
{ 
    int n[8]; 
    //===Masukan===
    int p1[8]; 	
    int p2[8]; 
    int p3[8]; 
    
    //===Target===	
	int t[8]; 	
    	
	int w=0; 
    int w1[8],w2[8],w3[8],wb[8]; 
    int nw1[8],nw2[8],nw3[8],nwb[8]; 
    int lw1, lw2, lw3, lwb; 
    //===Bias===
    int b=1; 							
    int a[8]; 
    char d[8]; 
 
    cout<<"\t\t\tModel Hebbian"; 
    cout<<"\n\n\t\n\n"; 
 
    cout<<"Masukkan Nilai";
    //cin>>b;
    cout<<endl;
    cout<<"[p1]\t[p2]\t[p3]\t[b]\t[t]\n\n"; 
 
  
    for(int i=0; i<8; i++){ 
      cin>> p1[i]>>p2[i]>>p3[i]>>b>>t[i];

    }
    cout<<"\n\n[Perubahan Bobot]\t\t[Bobot Baru]"; 
    cout<<"\n\n[p1*t]\t[p2*t]\t[p3*t]\t[b*t]\t[nw1]\t[nw2]\t[nw3]\t[nwb]\n\n"; 
    for(int i=0; i<8; i++){ 
        //===Menghitung Perubahan Bobot===
        w1[i]= t[i]*p1[i]; 							
        w2[i]= t[i]*p2[i]; 
        w3[i]= t[i]*p3[i]; 
        wb[i]= t[i]*1; 
 
        //===Bobot Baru Baris Pertama===
        nw1[0]=(t[0]*p1[0])+0; 						
        nw2[0]=(t[0]*p2[0])+0; 
        nw3[0]=(t[0]*p3[0])+0; 
        nwb[0]=(t[0]*1)+0; 
 
        //===Bobot Baru
        nw1[i+1]= (t[i+1]*p1[i+1])+nw1[i]; 			
        nw2[i+1]= (t[i+1]*p2[i+1])+nw2[i]; 
        nw3[i+1]= (t[i+1]*p3[i+1])+nw3[i]; 
        nwb[i+1]= (t[i+1]*1)+nwb[i]; 
 
        lw1=nw1[7]; 
        lw2=nw2[7]; 
        lw3=nw3[7]; 
        lwb=nwb[7]; 
 
        cout<<" "<<w1[i]<<"\t "<<w2[i]<<"\t "<<w3[i]<<"\t "<<wb[i]<<"\t "<<nw1[i]<<"\t "<<nw2[i]<<"\t "<<nw3[i]<<"\t "<<nwb[i]<<"\n"; 
    } 
 
    cout<<"\n bobot baru jaringan hasil pelatihan\n"; 
    cout<<"w1="<<lw1<<"\nw2="<<lw2<<"\nw3="<<lw3<<"\nwb="<<lwb<<"\n"; 
 
    cout<<"\nSimulasinya\n"; 
    cout<<"[w1]\t[w2]\t[w3]\t[n = total(pi*wi)+wb]  \t [F(n)]  \t [t]\n\n"; 
    for(int i=0; i<8; i++){ 
        //===Perhitungan n====
        n[i]= (p1[i]*lw1)+(p2[i]*lw2)+(p3[i]*lw3)+lwb; 			
        if(n[i]<0){ 
            //===Menetapkan f(n)===
            a[i]=-1; 											
        } 
        else{ 
            a[i]=1; 
        } 
        
        cout<<"   "<<p1[i]<<"\t "<<p2[i]<<"\t "<<p3[i]<<"\t     "<<n[i]<<"\t	           "<<a[i]<<" \t	  "<<t[i]<<"\n"; 
	}
	
	cout<<"\nHasil (S = Sama) (T = Tidak Sama)\n";
	for(int i=0; i<8; i++){     
        if(a[i]==t[i]){
        	d[i]={'S'};
		}
		else{
			d[i]={'T'};
		}	
   		
	    cout<< "   	 "<<d[i]<<"\n"; 
    } 
    
    cout<<"\nJika Ada 'T' 		maka [JST Hebb 'Tidak Dapat Mengerti' Pola Yang Dimaksud] \n";
    cout<<"\nJika Tidak Ada 'T'	maka [JST Hebb 'Dapat Mengerti' Pola Yang Dimaksud] \n\n\n";
 	
 	
    system("pause"); 
    return 0; 
}
