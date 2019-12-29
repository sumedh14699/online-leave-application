import java.util.*;
import java.math.*;
class RSA
{
   public static void main(String args[])
	{
		
		int p1,q1,n,pi,i,d,e,m;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter first prime number");
		p1=sc.nextInt();
		System.out.println("Enter second prime number");
		q1=sc.nextInt();
		n=p1*q1;
		
		pi=(p1-1)*(q1-1);

		for(i=2;i<pi;i++)
		{
			if(gcd(i,pi)==1)
				break;
		}
	    e=i;
		for(i=2;i<pi;i++)
		{
			int d1=(i*e)%pi;
			if(d1==1)
			break;
		}
  	    d=i;
  	    System.out.println("First prime no p1="+p1);
  	    System.out.println("second prime no q1="+q1);
  	    System.out.println("The N="+n);
  	    System.out.println("The pi value is="+pi);
  	    System.out.println("The public key e is="+e);
  	    System.out.println("The private key is="+d);
  	    
  	    System.out.println("Enter the message:");
        m=sc.nextInt();
        
        BigInteger N=BigInteger.valueOf(n);
        BigInteger M=BigInteger.valueOf(m);
        BigInteger E=BigInteger.valueOf(e);
        BigInteger D=BigInteger.valueOf(d);
        
		BigInteger C=M.modPow(E,N);
		BigInteger M1=C.modPow(D,N);
		System.out.println("Encrypted msg is:"+C);
		System.out.println("Decrypted msg is:"+M1);
		
	}
	static int gcd(int e,int pi)
	{
		if(e==0)
		return pi;
		else
		return gcd(pi%e,e);
	}

}



Enter first prime number                                                                                                               
13                                                                                                                                     
Enter second prime number                                                                                                              
29                                                                                                                                     
First prime no p1=13                                                                                                                   
second prime no q1=29                                                                                                                  
The N=377                                                                                                                              
The pi value is=336
The public key e is=5                                                                                                                  
The private key is=269                                                                                                                 
Enter the message:                                                                                                                     
7                                                                                                                                      
Encrypted msg is:219                                                                                                                   
Decrypted msg is:7                                                                                                                     
                      




