Website Link :- assignment2402.000webhostapp.com




Problem Statement :- 
                    A database has multiple tables with important data in form of rows and columns. This database also has a table (keyword_table) which stores keywords. These keywords point to the other database tables from which data is to be fetched as per the keyword.
               
Softwares used :- 1) PHP
                  2) XAMPP
                  3) MYSQL Database
                  
Nameof database = hash
Tables in the DATA base 

1) keyword 
 This table contains the following columns a)keyword_val(varchar 20)
                                           b)table_name(varchar 20)
                                           c)column_name(varchar 20)
*-------------*-------------*--------------------*
* keyword_val *  table_name * column_name        *
*-------------*-------------*--------------------*
*    000      *   table_1   *  col_1,col_2       *
*    010      *   table_2   * col_1,col_3        *
*    001      *   table_1   * col_2,col_3        *
*    100      *   table_1   * col_1,col_3        *
*    011      *   table_1   * col_1,col_2,col_3  *
*    110      *   table_2   * col_1,col_2        *
*    101      *   table_2   * col_2,col_3        *
*    111      *   table_2   * col_1,col_2,col_3  *
*-------------*-------------*--------------------*

2) table_1
   This table contains the following columns a)col_1(varchar 20)
                                             b)col_2(varchar 20)
                                             c)col_3(varchar 20)
          col_1(Ram,Leela,Raj)
          col_2(1221,1521,2521)
          col_3(A,C,C)
          
         

3) table_2
  This table contains the following columns a)col_1(varchar 20)
                                            b)col_2(varchar 20)
                                            c)col_3(varchar 20)
         col_1(Harsh,Nitish,Reena)
         col_2(3036,1224,0012)
         col_3(A,B,A)
           
QURY USED in the PHP :- 
                SELECT table_name, column_name  FROM keyword WHERE keyword_val=$key(value taken as input from the url)
                SELECT $sep[$i] FROM $row_val
                
                
                where $sep[$i]= column_name array element where &i ranges from 0 to array.length-1
                and 
                $row_val= value of table name
                
               for example if we click on the button  '000' we get the OUTPUT as
                
               Table Name :- table_name
               col_1
               Ram
               Leela
               Raj
               
               col_2
               1221
               1521
               2521
                
                
                

