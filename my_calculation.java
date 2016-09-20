import java.util.Scanner;
class calculation {
   int z;
   int c;
    int sum =0;
	float per;
   Scanner s = new Scanner(System.in);
	
public void main()
{
System.out.println("enter the name");
String a;
a=s.nextLine();
System.out.println("enter the phone no");
int b;
b=s.nextInt();
System.out.println("enter your father name");
String f;
f=s.next();
System.out.println("enter your mother  name");
String da;
da=s.next();

System.out.println("enter the  subject  counting");
c=s.nextInt();
}
   public void take() 
   { 
   int i;
  
   int marks;
  
   for( i =1; i<= c; i++ )
   {
   System.out.println("enter the marks of subject");
   marks=s.nextInt();
   sum=sum+marks;  
   }
   System.out.println("total marks is:"+sum);
   }   
	
	
   public void percentage()
   {
	   
      per = (sum*100)/(c*100);
      System.out.println("The % is :"+per);
   }
   public void grade()
   {
	   if(per>=90.0)
	   {
		   System.out.println("grade A");
		   
	   }
	   if(per>=70 && per < 90 )
	   {
		   System.out.println("grade B");
		   
	   }
	   else
	   {
		   System.out.println("grade C");
	   }
   }
	
	
    
}


