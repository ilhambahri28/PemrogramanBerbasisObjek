public class Employee{String Name; String IDNumber; String Department; String Position;

Employee(String Name, String IDNumber, String Department, String Position) {
    
    this.Name = Name;
    this.IDNumber = IDNumber;
    this.Department = Department;
    this.Position = Position;
    
  }
  void display() {
    
    System.out.println("Name =" + this.Name);
    System.out.println("ID Number  =" + this.IDNumber);
    System.out.println("Department =" + this.Department);
    System.out.println("Position =" + this.Position);
  
}


