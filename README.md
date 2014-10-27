phpstockmarketanalyzer
======================

The code written in PHP fetches live data from the yahoo servers and does the analysis based on the algorithm specified.

There is a includes folder which consists of connect.php , documentation , and stockdownloader.php these both php files fetches the data 
and put in the local database on which the analysis is performed

The companies input is provided by a ticker program written outside the includes folder which provides its input companies  to the custom url 
created in the code.

It fetches the live data and an algorithm is written to find the stocks falling too bad and rising too high in a small course of time. 


