<!doctype html>
<html>
<head>
<body>
<font size="6"><u>What are Variables</u></font><br/>
<font size="5">Variable are used in C++, where we need storage for any value, which will change in program. Variable can be declared in multiple ways each with different memory requirements and functioning. Variable is the name of memory location allocated by the compiler depending upon the datatype of the variable.</font><br/>
<center><img src="var.png"></center>
<style type="text/css">
body{
	background-image:url("c++.png");
	background-position:50% 30%;
	background-repeat:no-repeat;
	}
	</style>
	<font size="6"><u>Declaration and Initialization</u></font><br/>
<font size="5">Variable must be declared before they are used. Usually it is preferred to declare them at the starting of the program, but in C++ they can be declared in the middle of program too, but must be done before using them.<br/>
<br/>
<br/>
<em>Example :</em>
<div class="one">
int i;      // declared but not initialised<br/>
char c; <br/>
int i, j, k;  // Multiple declaration<br/>
</div>
<style type="text/css">
.one{ border:10px groove gray;
width:400px;
}

</style>

Initialization means assigning value to an already declared variable,<br/>
<br/>
<div class="two">
int i;   // declaration<br/>
i = 10;  // initialization<br/>
</div>
</font>
<style>
.two{ border:10px groove gray;
width:400px;
}
</style>
<font size="6"><u>Scope of Variables</u></font><br/>
<font size="5">All the variables have their area of functioning, and out of that boundary they don't hold their value, this boundary is called scope of the variable. For most of the cases its between the curly braces,in which variable is declared that a variable exists, not outside it. We will study the storage classes later, but as of now, we can broadly divide variables into two main types,<br/>

Global Variables<br/>
Local variables<br/>
Global variables<br/>
Global variables are those, which are once declared and can be used throughout the lifetime of the program by any class or any function. They must be declared outside the main() function. If only declared, they can be assigned different values at different time in program lifetime. But even if they are declared and initialized at the same time outside the main() function, then also they can be assigned any value at any point in the program.<br/>
<br/>
<em>Example : Only declared, not initialized</em><br/>
<div class="three">
include <iostream><br/>
using namespace std;<br/>
int x;                // Global variable declared<br/>
int main()<br/>
{<br/>
 x=10;                 // Initialized once<br/>
 cout <<"first value of x = "<< x;<br/>
 x=20;                 // Initialized again<br/>
 cout <<"Initialized again with value = "<< x;<br/>
}<br/>
</div>
<style>
.three{
 border:10px groove gray;
width:500px;
}
</style>

</body>
</head>
</html>