#include<iostream>  
  
using namespace std; 
  
class Person
{
  public :
    string Name;
    string Address;
    long Telephone;
    Person(string inputName, string inputAddress, long inputTelephone)
    {
      Name = inputName;
      Address = inputAddress;
      Telephone = inputTelephone;
    }
    
      void display()
    {
      cout<<Name<<endl;
      cout<<Address<<endl;
      cout<<Telephone<<endl;
    }
};