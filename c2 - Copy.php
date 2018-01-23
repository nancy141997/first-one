<!doctype html>
<html>
<head>
<body>


 <h1><center><font size=40 style=font-family:courier>OVERVIEW OF C++</font></center></h1>;

<div class="div1">
<ul>
<a href="c3.php">
<li>Introduction to C++</li></a>
<a href="c4.php"><li>OOPS concepts basic</li></a>
<a href="c2.php"><li>Basic Syntax and Structure</li></a>
<a href="c5.php"><li>Data types and Modifiers</li></a>
<a href="c6.php"><li>Variables in C++</li></a>
<a href="c7.php"><li>Operators in C++</li></a>
</ul>
</div>
<div class="div2">
<p><font size="6"><u>Basics of C++:</u></font><br/>
<font size="5">In this section we will cover the basics of C++, it will include the syntax, variable, operators, loop types, pointers, references and information about other requirements of a C++ program. You will come across lot of terms that you have already studied in C language.</font><br/>

<font size="6"><u>Syntax and Structure of C++ program:</u></font><br/>
<font size="5">Here we will discuss one simple and basic C++ program to print "Hello this is C++" and its structure in parts with details and uses.</font><br/>
<font size="6"><u>First C++ program</u></font><br/>
<font size="5"><#include <iostream.h><br/>
using namespace std;<br/>
int main()<br/>
{<br/>
cout << "Hello this is C++";<br/>
}<br/>
Header files are included at the beginning just like in C program. Here iostream is a header file which provides us with input & output streams. Header files contained predeclared function libraries, which can be used by users for their ease.

Using namespace std, tells the compiler to use standard namespace. Namespace collects identifiers used for class, object and variables. NameSpace can be used by two ways in a program, either by the use of using statement at the beginning, like we did in above mentioned program or by using name of namespace as prefix before the identifier with scope resolution (::) operator.<br/>

Example : std::cout << "A";<br/>

main(), is the function which holds the executing part of program its return type is int.<br/>

cout <<, is used to print anything on screen, same as printf in C language. cin and cout are same as scanf and printf, only difference is that you do not need to mention format specifiers like, %d for int etc, in cout & cin.</font><br/>

<font size="6"><u>Comments</u></font><br/>
<font size="5">For single line comments, use // before mentioning comment, like<br/>

cout<<"single line";   // This is single line comment<br/>
For multiple line comment, enclose the comment between /* and */
/*this is 
  a multiple line 
  comment */</font><br/>
<font size="6"><u>Using Classes</u></font><br/>
<font size="5">Classes name must start with capital letter, and they contain data variables and member functions. This is a mere introduction to classes, we will discuss classes in detail throughout the C++ tutorial.<br/>
class Abc<br/>
{<br/>
 int i;           //data variable<br/>
 void display()         //Member Function<br/>
  { <br/>
   cout<<"Inside Member Function";<br/>
  }<br/>
}; // Class ends here<br/>

int main()<br/>
{<br/>
 Abc obj;  // Creatig Abc class's object<br/>
 obj.display();  //Calling member function using class object<br/>
}<br/>
This is how class is defined, its object is created and the member functions are used.

Variables can be declared anywhere in the entire program, but must be declared, before they are used. Hence, we don't need to declare variable at the start of the program.</font>
</p>
</div>


<style type="text/css">
body{
	background-image:url("c++.png");
	background-position:50% 30%;
	background-repeat:no-repeat;
	}
	ul{
		font-size:30px;
	}
	
	.div1{ float:left;
	}
	.div3{float:left
	}
</body>
</head>
</html>