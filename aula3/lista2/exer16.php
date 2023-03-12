<?php

$n;

while ($i<$n){
	cin>>x>>y;
	
	if(x==y||y==x+1||x==y+1){
		
		cout<<0<<"\n";
	}
	else if (x<y||x>y){
		if(x>y){
			z=x;
			x=y;
			y=z;
		}
		for(j=0;j<n;j++){
			while(x<y-1){
				x+=1;
				if(x%2!=0){
					k+=x;
				}
			}
		}
		cout<<k<<"\n";
		k=0;
	}
	i++;	
}





?>