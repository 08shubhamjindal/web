#include<iostream>
#include<conio>
using namespace std;
char name[20];
int age,a,loan,deposit
class A
{
public:
void info()
{
cout<<"enter the name"<<endl;
cin>>name;
cout<<"enter your age"<<endl;
cin>>age;
}
void show()
{
cout<<"your name is "<<name<<endl;
cout<<"your age is"<<age<<endl;
}
};
class B : private A
{

info();
public:
cout<<"enter 1 for loan and 2 for deposit"<<endl;
cin>>a;
void loan()
{
if(a==1)
{
cout<<"enter amount for loan"<<endl;
cin>>loan;
}
}
void deposit()
{
if(a==2)
{
cout<<"enter amount for deposit"<<endl;
cin>>deposit;
}
}
};
class C : private B
{
public:
void display()
{
loan();
deposit();
}
};
int main()
{
clrscr();
C obj;
obj.display();
return 0;
}


