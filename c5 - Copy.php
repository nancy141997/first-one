<!doctype html>
<html>
<head>
<body>

<font size="6"><u>Data Types in C++</u></font><br/>
<font size="5">They are used to define type of variables and contents used. Data types define the way you use storage in the programs you write. Data types can be built in or abstract.</font><br/>

<font size="6"><u>Built in Data Types</u></font><br/>
<font size="5">These are the data types which are predefined and are wired directly into the compiler. eg: int, char etc.</font><br/>

<font size="6"><u>User defined or Abstract data types</u></font><br/>
<font size="5">These are the type, that user creates as a class. In C++ these are classes where as in C it was implemented by structures.</font><br/>
<br/>
<br/>
<style type="text/css">
body{
	background-image:url("c++.png");
	background-position:50% 30%;
	background-repeat:no-repeat;
	}
	</style>
	<center><table border="5" cellspacing="7" cellpadding="10">
	
	<tr> <td>char</td>
	<td>for character storage ( 1 byte )</td></tr>
	<tr> <td>int</td>
	<td>for integral number ( 2 bytes )</td></tr>
	<tr> <td>float</td>
	<td>single precision floating point ( 4 bytes )</td></tr>
	<tr> <td>double</td>
	<td>double precision floating point numbers ( 8 bytes )</td></tr>
	</table></center><br/><br/>
<font size="6"><u>Other Built in types</u></font><br/>
<center><table border="5" cellspacing="7" cellpadding="10">
	
	<tr> <td>bool</td>
	<td>Boolean ( True or False )</td></tr>
	<tr> <td>void</td>
	<td>Without any Value</td></tr>
	<tr> <td>wchar_t</td>
	<td>Wide Character</td></tr>
	
	</table></center><br/><br/>
	<font size="6"><u>Enum as Data type</u></font><br/>
<font size="5">Enumerated type declares a new type-name and a sequence of value containing identifiers which has values starting from 0 and incrementing by 1 every time.<br/>
Here an enumeration of days is defined with variable d. mon will hold value 0, tue will have 1 and so on. We can also explicitly assign values, like, enum day(mon, tue=7, wed);. Here, mon will be 0, tue is assigned 7, so wed will have value 8.</font><br/>
<font size="6"><u>Modifiers</u></font><br/>
<font size="5">Specifiers modify the meanings of the predefined built-in data types and expand them to a much larger set. There are four data type modifiers in C++, they are :<br/>

long<br/>
short<br/>
signed<br/>
unsigned<br/>
Below mentioned are some important points you must know about the modifiers,<br/>

long and short modify the maximum and minimum values that a data type will hold.<br>
A plain int must have a minimum size of short.<br/>
Size hierarchy : short int < int < long int<br/>
Size hierarchy for floating point numbers is : float < double < long double<br/>
long float is not a legal type and there are no short floating point numbers.<br/>
Signed types includes both positive and negative numbers and is the default type.<br/>
Unsigned, numbers are always without any sign, that is always positive.</font><br/>