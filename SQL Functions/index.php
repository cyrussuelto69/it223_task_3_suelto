<?php
require_once "dbconnection.php";

$sql = "SELECT * FROM peopletbl";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Functions</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

    <div class="container mt-5">
        <div class="card-body">
            <div class="table-responsive">
                <h3>Mysql String Functions</h3>
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>SQL Function</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>ASCII()</td>
                            <td>Returns the ASCII value of the first character in a string</td>
                            <td>
                                <code>SELECT name, ASCII(name) AS ascii_value FROM mytbl;</code>
                            </td>
                            <td>
                                <a href="ascii.php">View Output</a>
                            </td>
                        </tr>

                        <tr>
                            <td>CHAR_LENGTH()</td>
                            <td>Returns the number of characters in a string</td>
                            <td>
                                <code>SELECT name, CHAR_LENGTH(name) AS char_length FROM mytbl;</code>
                            </td>
                            <td>
                                <a href="char_length.php">View Output</a>
                            </td>
                        </tr>


                        <tr>
                            <td>CONCAT()</td>
                            <td>Adds two or more expressions together</td>
                            <td><code>SELECT CONCAT(name,' - ',city) AS result FROM mytbl;</code></td>
                            <td><a href="concat.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CONCAT_WS()</td>
                            <td>Adds two or more expressions together with a separator</td>
                            <td><code>SELECT CONCAT_WS(' | ',name,email,city) AS result FROM mytbl;</code></td>
                            <td><a href="concat_ws.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>FIELD()</td>
                            <td>Returns the index position of a value in a list</td>
                            <td><code>SELECT city, FIELD(city,'Cebu','Davao','Manila','Cagayan') AS result FROM mytbl;</code></td>
                            <td><a href="field.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>FIND_IN_SET()</td>
                            <td>Returns the position of a value in a comma-separated list</td>
                            <td><code>SELECT tags, FIND_IN_SET('active',tags) AS result FROM mytbl;</code></td>
                            <td><a href="find_in_set.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>FORMAT()</td>
                            <td>Formats a number to a format like '#,###.##'</td>
                            <td><code>SELECT salary, FORMAT(salary,2) AS result FROM mytbl;</code></td>
                            <td><a href="format.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>INSERT()</td>
                            <td>Inserts a substring within a string at a specified position</td>
                            <td><code>SELECT name, INSERT(name,2,0,'--') AS result FROM mytbl;</code></td>
                            <td><a href="insert.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>INSTR()</td>
                            <td>Returns the position of the first occurrence of a substring</td>
                            <td><code>SELECT name, INSTR(name,'a') AS result FROM mytbl;</code></td>
                            <td><a href="instr.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LCASE()</td>
                            <td>Converts a string to lowercase</td>
                            <td><code>SELECT name, LCASE(name) AS result FROM mytbl;</code></td>
                            <td><a href="lcase.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LEFT()</td>
                            <td>Returns a specified number of characters from the left</td>
                            <td><code>SELECT name, LEFT(name,3) AS result FROM mytbl;</code></td>
                            <td><a href="left.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LENGTH()</td>
                            <td>Returns the length of a string in bytes</td>
                            <td><code>SELECT name, LENGTH(name) AS result FROM mytbl;</code></td>
                            <td><a href="length.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOCATE()</td>
                            <td>Returns the position of a substring in a string</td>
                            <td><code>SELECT name, LOCATE('a',name) AS result FROM mytbl;</code></td>
                            <td><a href="locate.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOWER()</td>
                            <td>Converts a string to lowercase</td>
                            <td><code>SELECT email, LOWER(email) AS result FROM mytbl;</code></td>
                            <td><a href="lower.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LPAD()</td>
                            <td>Pads the left side of a string with characters</td>
                            <td><code>SELECT name, LPAD(name,12,'*') AS result FROM mytbl;</code></td>
                            <td><a href="lpad.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LTRIM()</td>
                            <td>Removes leading spaces from a string</td>
                            <td><code>SELECT notes, LTRIM(notes) AS result FROM mytbl;</code></td>
                            <td><a href="ltrim.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MID()</td>
                            <td>Extracts characters from a string (alias of SUBSTRING)</td>
                            <td><code>SELECT name, MID(name,2,3) AS result FROM mytbl;</code></td>
                            <td><a href="mid.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>POSITION()</td>
                            <td>Returns the position of a substring in a string</td>
                            <td><code>SELECT name, POSITION('a' IN name) AS result FROM mytbl;</code></td>
                            <td><a href="position.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>REPEAT()</td>
                            <td>Repeats a string a specified number of times</td>
                            <td><code>SELECT name, REPEAT('*',5) AS result FROM mytbl;</code></td>
                            <td><a href="repeat.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>REPLACE()</td>
                            <td>Replaces occurrences of a substring within a string</td>
                            <td><code>SELECT notes, REPLACE(notes,'replace','changed') AS result FROM mytbl;</code></td>
                            <td><a href="replace.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>REVERSE()</td>
                            <td>Reverses a string and returns the result</td>
                            <td><code>SELECT name, REVERSE(name) AS result FROM mytbl;</code></td>
                            <td><a href="reverse.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>RIGHT()</td>
                            <td>Returns a specified number of characters from the right</td>
                            <td><code>SELECT name, RIGHT(name,3) AS result FROM mytbl;</code></td>
                            <td><a href="right.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>RPAD()</td>
                            <td>Pads the right side of a string with characters</td>
                            <td><code>SELECT name, RPAD(name,12,'*') AS result FROM mytbl;</code></td>
                            <td><a href="rpad.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>RTRIM()</td>
                            <td>Removes trailing spaces from a string</td>
                            <td><code>SELECT notes, RTRIM(notes) AS result FROM mytbl;</code></td>
                            <td><a href="rtrim.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SPACE()</td>
                            <td>Returns a string of specified number of spaces</td>
                            <td><code>SELECT CONCAT('A',SPACE(5),'B') AS result;</code></td>
                            <td><a href="space.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>STRCMP()</td>
                            <td>Compares two strings and returns 0, 1, or -1</td>
                            <td><code>SELECT name, STRCMP(name,'Ana Cruz') AS result FROM mytbl;</code></td>
                            <td><a href="strcmp.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SUBSTR()</td>
                            <td>Extracts a substring from a string</td>
                            <td><code>SELECT email, SUBSTR(email,1,5) AS result FROM mytbl;</code></td>
                            <td><a href="substr.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SUBSTRING()</td>
                            <td>Extracts a substring from a string</td>
                            <td><code>SELECT email, SUBSTRING(email,1,5) AS result FROM mytbl;</code></td>
                            <td><a href="substring.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SUBSTRING_INDEX()</td>
                            <td>Returns substring before a specified number of delimiters</td>
                            <td><code>SELECT email, SUBSTRING_INDEX(email,'@',1) AS result FROM mytbl;</code></td>
                            <td><a href="substring_index.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TRIM()</td>
                            <td>Removes leading and trailing spaces from a string</td>
                            <td><code>SELECT notes, TRIM(notes) AS result FROM mytbl;</code></td>
                            <td><a href="trim.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>UCASE()</td>
                            <td>Converts a string to uppercase</td>
                            <td><code>SELECT name, UCASE(name) AS result FROM mytbl;</code></td>
                            <td><a href="ucase.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>UPPER()</td>
                            <td>Converts a string to uppercase</td>
                            <td><code>SELECT email, UPPER(email) AS result FROM mytbl;</code></td>
                            <td><a href="upper.php">View Output</a></td>
                        </tr>
                    </tbody>
                </table>


                <h3 class="mt-5">Mysql Numeric Functions</h3>
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>SQL Function</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>ABS()</td>
                            <td>Returns the absolute value of a number</td>
                            <td><code>SELECT score, ABS(score-100) AS result FROM mytbl;</code></td>
                            <td><a href="abs.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ACOS()</td>
                            <td>Returns the arc cosine of a number</td>
                            <td><code>SELECT score, ACOS(score/100) AS result FROM mytbl;</code></td>
                            <td><a href="acos.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ASIN()</td>
                            <td>Returns the arc sine of a number</td>
                            <td><code>SELECT score, ASIN(score/100) AS result FROM mytbl;</code></td>
                            <td><a href="asin.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ATAN()</td>
                            <td>Returns the arc tangent of a number</td>
                            <td><code>SELECT score, ATAN(score) AS result FROM mytbl;</code></td>
                            <td><a href="atan.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ATAN2()</td>
                            <td>Returns the arc tangent of two numbers</td>
                            <td><code>SELECT score, age, ATAN2(score,age) AS result FROM mytbl;</code></td>
                            <td><a href="atan2.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>AVG()</td>
                            <td>Returns the average value</td>
                            <td><code>SELECT AVG(score) AS result FROM mytbl;</code></td>
                            <td><a href="avg.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CEIL()</td>
                            <td>Rounds a number up</td>
                            <td><code>SELECT score, CEIL(score) AS result FROM mytbl;</code></td>
                            <td><a href="ceil.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CEILING()</td>
                            <td>Same as CEIL()</td>
                            <td><code>SELECT score, CEILING(score) AS result FROM mytbl;</code></td>
                            <td><a href="ceiling.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>COS()</td>
                            <td>Returns the cosine of a number</td>
                            <td><code>SELECT score, COS(score) AS result FROM mytbl;</code></td>
                            <td><a href="cos.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>COT()</td>
                            <td>Returns the cotangent of a number</td>
                            <td><code>SELECT score, COT(score) AS result FROM mytbl;</code></td>
                            <td><a href="cot.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>COUNT()</td>
                            <td>Returns number of rows</td>
                            <td><code>SELECT COUNT(*) AS result FROM mytbl;</code></td>
                            <td><a href="count.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DEGREES()</td>
                            <td>Converts radians to degrees</td>
                            <td><code>SELECT score, DEGREES(score) AS result FROM mytbl;</code></td>
                            <td><a href="degrees.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DIV</td>
                            <td>Integer division</td>
                            <td><code>SELECT age, age DIV 2 AS result FROM mytbl;</code></td>
                            <td><a href="div.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>EXP()</td>
                            <td>Returns e raised to a power</td>
                            <td><code>SELECT EXP(1) AS result;</code></td>
                            <td><a href="exp.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>FLOOR()</td>
                            <td>Rounds a number down</td>
                            <td><code>SELECT score, FLOOR(score) AS result FROM mytbl;</code></td>
                            <td><a href="floor.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>GREATEST()</td>
                            <td>Returns the greatest value</td>
                            <td><code>SELECT score, age, GREATEST(score,age) AS result FROM mytbl;</code></td>
                            <td><a href="greatest.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LEAST()</td>
                            <td>Returns the smallest value</td>
                            <td><code>SELECT score, age, LEAST(score,age) AS result FROM mytbl;</code></td>
                            <td><a href="least.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LN()</td>
                            <td>Returns natural logarithm</td>
                            <td><code>SELECT score, LN(score) AS result FROM mytbl;</code></td>
                            <td><a href="ln.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOG()</td>
                            <td>Returns natural logarithm</td>
                            <td><code>SELECT score, LOG(score) AS result FROM mytbl;</code></td>
                            <td><a href="log.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOG10()</td>
                            <td>Returns base-10 logarithm</td>
                            <td><code>SELECT score, LOG10(score) AS result FROM mytbl;</code></td>
                            <td><a href="log10.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOG2()</td>
                            <td>Returns base-2 logarithm</td>
                            <td><code>SELECT score, LOG2(score) AS result FROM mytbl;</code></td>
                            <td><a href="log2.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MAX()</td>
                            <td>Returns maximum value</td>
                            <td><code>SELECT MAX(score) AS result FROM mytbl;</code></td>
                            <td><a href="max.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MIN()</td>
                            <td>Returns minimum value</td>
                            <td><code>SELECT MIN(score) AS result FROM mytbl;</code></td>
                            <td><a href="min.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MOD()</td>
                            <td>Returns remainder</td>
                            <td><code>SELECT age, MOD(age,2) AS result FROM mytbl;</code></td>
                            <td><a href="mod.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>PI()</td>
                            <td>Returns value of PI</td>
                            <td><code>SELECT PI() AS result;</code></td>
                            <td><a href="pi.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>POW()</td>
                            <td>Raises a number to a power</td>
                            <td><code>SELECT age, POW(age,2) AS result FROM mytbl;</code></td>
                            <td><a href="pow.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>POWER()</td>
                            <td>Same as POW()</td>
                            <td><code>SELECT age, POWER(age,2) AS result FROM mytbl;</code></td>
                            <td><a href="power.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>RADIANS()</td>
                            <td>Converts degrees to radians</td>
                            <td><code>SELECT score, RADIANS(score) AS result FROM mytbl;</code></td>
                            <td><a href="radians.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>RAND()</td>
                            <td>Returns random number</td>
                            <td><code>SELECT RAND() AS result;</code></td>
                            <td><a href="rand.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ROUND()</td>
                            <td>Rounds a number</td>
                            <td><code>SELECT score, ROUND(score,1) AS result FROM mytbl;</code></td>
                            <td><a href="round.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SIGN()</td>
                            <td>Returns sign of a number</td>
                            <td><code>SELECT score, SIGN(score-80) AS result FROM mytbl;</code></td>
                            <td><a href="sign.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SIN()</td>
                            <td>Returns sine</td>
                            <td><code>SELECT score, SIN(score) AS result FROM mytbl;</code></td>
                            <td><a href="sin.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SQRT()</td>
                            <td>Returns square root</td>
                            <td><code>SELECT score, SQRT(score) AS result FROM mytbl;</code></td>
                            <td><a href="sqrt.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SUM()</td>
                            <td>Returns sum</td>
                            <td><code>SELECT SUM(salary) AS result FROM mytbl;</code></td>
                            <td><a href="sum.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TAN()</td>
                            <td>Returns tangent</td>
                            <td><code>SELECT score, TAN(score) AS result FROM mytbl;</code></td>
                            <td><a href="tan.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TRUNCATE()</td>
                            <td>Truncates a number</td>
                            <td><code>SELECT score, TRUNCATE(score,1) AS result FROM mytbl;</code></td>
                            <td><a href="truncate.php">View Output</a></td>
                        </tr>

                    </tbody>
                </table>

                <h3 class="mt-5">Mysql Date Functions</h3>
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>SQL Function</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>ADDDATE()</td>
                            <td>Adds an interval to a date</td>
                            <td><code>SELECT d, ADDDATE(d, INTERVAL 7 DAY) AS result FROM datetbl;</code></td>
                            <td><a href="adddate.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ADDTIME()</td>
                            <td>Adds time values</td>
                            <td><code>SELECT t, ADDTIME(t, '02:15:00') AS result FROM datetbl;</code></td>
                            <td><a href="addtime.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CURDATE()</td>
                            <td>Returns the current date</td>
                            <td><code>SELECT CURDATE() AS result;</code></td>
                            <td><a href="curdate.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CURRENT_DATE()</td>
                            <td>Returns the current date</td>
                            <td><code>SELECT CURRENT_DATE() AS result;</code></td>
                            <td><a href="current_date.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CURRENT_TIME()</td>
                            <td>Returns the current time</td>
                            <td><code>SELECT CURRENT_TIME() AS result;</code></td>
                            <td><a href="current_time.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CURRENT_TIMESTAMP()</td>
                            <td>Returns current date and time</td>
                            <td><code>SELECT CURRENT_TIMESTAMP() AS result;</code></td>
                            <td><a href="current_timestamp.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CURTIME()</td>
                            <td>Returns the current time</td>
                            <td><code>SELECT CURTIME() AS result;</code></td>
                            <td><a href="curtime.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DATE()</td>
                            <td>Extracts the date part from a datetime</td>
                            <td><code>SELECT dt, DATE(dt) AS result FROM datetbl;</code></td>
                            <td><a href="date.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DATEDIFF()</td>
                            <td>Days difference between two dates</td>
                            <td><code>SELECT d, DATEDIFF(CURDATE(), d) AS result FROM datetbl;</code></td>
                            <td><a href="datediff.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DATE_ADD()</td>
                            <td>Adds an interval to a date</td>
                            <td><code>SELECT d, DATE_ADD(d, INTERVAL 1 MONTH) AS result FROM datetbl;</code></td>
                            <td><a href="date_add.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DATE_FORMAT()</td>
                            <td>Formats a date/datetime</td>
                            <td><code>SELECT dt, DATE_FORMAT(dt, '%Y-%m-%d %H:%i') AS result FROM datetbl;</code></td>
                            <td><a href="date_format.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DATE_SUB()</td>
                            <td>Subtracts an interval from a date</td>
                            <td><code>SELECT d, DATE_SUB(d, INTERVAL 10 DAY) AS result FROM datetbl;</code></td>
                            <td><a href="date_sub.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DAY()</td>
                            <td>Returns the day of month (1-31)</td>
                            <td><code>SELECT d, DAY(d) AS result FROM datetbl;</code></td>
                            <td><a href="day.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DAYNAME()</td>
                            <td>Returns the weekday name</td>
                            <td><code>SELECT d, DAYNAME(d) AS result FROM datetbl;</code></td>
                            <td><a href="dayname.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DAYOFMONTH()</td>
                            <td>Returns the day of month (1-31)</td>
                            <td><code>SELECT d, DAYOFMONTH(d) AS result FROM datetbl;</code></td>
                            <td><a href="dayofmonth.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DAYOFWEEK()</td>
                            <td>Returns the weekday index (1=Sun..7=Sat)</td>
                            <td><code>SELECT d, DAYOFWEEK(d) AS result FROM datetbl;</code></td>
                            <td><a href="dayofweek.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DAYOFYEAR()</td>
                            <td>Returns the day of year (1-366)</td>
                            <td><code>SELECT d, DAYOFYEAR(d) AS result FROM datetbl;</code></td>
                            <td><a href="dayofyear.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>EXTRACT()</td>
                            <td>Extracts part of a date</td>
                            <td><code>SELECT dt, EXTRACT(HOUR FROM dt) AS result FROM datetbl;</code></td>
                            <td><a href="extract.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>FROM_DAYS()</td>
                            <td>Converts a day number to a date</td>
                            <td><code>SELECT days_num, FROM_DAYS(days_num) AS result FROM datetbl;</code></td>
                            <td><a href="from_days.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>HOUR()</td>
                            <td>Returns the hour (0-23)</td>
                            <td><code>SELECT t, HOUR(t) AS result FROM datetbl;</code></td>
                            <td><a href="hour.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LAST_DAY()</td>
                            <td>Returns last day of the month</td>
                            <td><code>SELECT d, LAST_DAY(d) AS result FROM datetbl;</code></td>
                            <td><a href="last_day.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOCALTIME()</td>
                            <td>Returns local date and time</td>
                            <td><code>SELECT LOCALTIME() AS result;</code></td>
                            <td><a href="localtime.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LOCALTIMESTAMP()</td>
                            <td>Returns local date and time</td>
                            <td><code>SELECT LOCALTIMESTAMP() AS result;</code></td>
                            <td><a href="localtimestamp.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MAKEDATE()</td>
                            <td>Creates a date from year and day-of-year</td>
                            <td><code>SELECT MAKEDATE(2025, 32) AS result;</code></td>
                            <td><a href="makedate.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MAKETIME()</td>
                            <td>Creates a time from hour, minute, second</td>
                            <td><code>SELECT MAKETIME(10, 30, 15) AS result;</code></td>
                            <td><a href="maketime.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MICROSECOND()</td>
                            <td>Returns microseconds part (0-999999)</td>
                            <td><code>SELECT dt, MICROSECOND(dt) AS result FROM datetbl;</code></td>
                            <td><a href="microsecond.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MINUTE()</td>
                            <td>Returns the minute (0-59)</td>
                            <td><code>SELECT t, MINUTE(t) AS result FROM datetbl;</code></td>
                            <td><a href="minute.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MONTH()</td>
                            <td>Returns the month number (1-12)</td>
                            <td><code>SELECT d, MONTH(d) AS result FROM datetbl;</code></td>
                            <td><a href="month.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>MONTHNAME()</td>
                            <td>Returns month name</td>
                            <td><code>SELECT d, MONTHNAME(d) AS result FROM datetbl;</code></td>
                            <td><a href="monthname.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>NOW()</td>
                            <td>Returns current date and time</td>
                            <td><code>SELECT NOW() AS result;</code></td>
                            <td><a href="now.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>PERIOD_ADD()</td>
                            <td>Adds months to a period (YYYYMM)</td>
                            <td><code>SELECT period_ym, PERIOD_ADD(period_ym, 2) AS result FROM datetbl;</code></td>
                            <td><a href="period_add.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>PERIOD_DIFF()</td>
                            <td>Months difference between periods (YYYYMM)</td>
                            <td><code>SELECT PERIOD_DIFF(202602, 202501) AS result;</code></td>
                            <td><a href="period_diff.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>QUARTER()</td>
                            <td>Returns quarter of the year (1-4)</td>
                            <td><code>SELECT d, QUARTER(d) AS result FROM datetbl;</code></td>
                            <td><a href="quarter.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SECOND()</td>
                            <td>Returns the second (0-59)</td>
                            <td><code>SELECT t, SECOND(t) AS result FROM datetbl;</code></td>
                            <td><a href="second.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SEC_TO_TIME()</td>
                            <td>Converts seconds to time</td>
                            <td><code>SELECT SEC_TO_TIME(3661) AS result;</code></td>
                            <td><a href="sec_to_time.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>STR_TO_DATE()</td>
                            <td>Converts a string to a date</td>
                            <td><code>SELECT STR_TO_DATE('2025-01-15 10:30:15','%Y-%m-%d %H:%i:%s') AS result;</code></td>
                            <td><a href="str_to_date.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SUBDATE()</td>
                            <td>Subtracts an interval from a date</td>
                            <td><code>SELECT d, SUBDATE(d, INTERVAL 7 DAY) AS result FROM datetbl;</code></td>
                            <td><a href="subdate.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SUBTIME()</td>
                            <td>Subtracts time values</td>
                            <td><code>SELECT t, SUBTIME(t, '01:00:00') AS result FROM datetbl;</code></td>
                            <td><a href="subtime.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SYSDATE()</td>
                            <td>Returns the time when function executes</td>
                            <td><code>SELECT SYSDATE() AS result;</code></td>
                            <td><a href="sysdate.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TIME()</td>
                            <td>Extracts time part from datetime</td>
                            <td><code>SELECT dt, TIME(dt) AS result FROM datetbl;</code></td>
                            <td><a href="time.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TIME_FORMAT()</td>
                            <td>Formats a time value</td>
                            <td><code>SELECT t, TIME_FORMAT(t, '%H:%i') AS result FROM datetbl;</code></td>
                            <td><a href="time_format.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TIME_TO_SEC()</td>
                            <td>Converts time to seconds</td>
                            <td><code>SELECT t, TIME_TO_SEC(t) AS result FROM datetbl;</code></td>
                            <td><a href="time_to_sec.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TIMEDIFF()</td>
                            <td>Difference between two times</td>
                            <td><code>SELECT t, TIMEDIFF(t, '01:00:00') AS result FROM datetbl;</code></td>
                            <td><a href="timediff.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TIMESTAMP()</td>
                            <td>Creates a timestamp from date and time</td>
                            <td><code>SELECT d, t, TIMESTAMP(d, t) AS result FROM datetbl;</code></td>
                            <td><a href="timestamp.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>TO_DAYS()</td>
                            <td>Returns day number for a date</td>
                            <td><code>SELECT d, TO_DAYS(d) AS result FROM datetbl;</code></td>
                            <td><a href="to_days.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>WEEK()</td>
                            <td>Returns the week number</td>
                            <td><code>SELECT d, WEEK(d) AS result FROM datetbl;</code></td>
                            <td><a href="week.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>WEEKDAY()</td>
                            <td>Returns weekday index (0=Mon..6=Sun)</td>
                            <td><code>SELECT d, WEEKDAY(d) AS result FROM datetbl;</code></td>
                            <td><a href="weekday.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>WEEKOFYEAR()</td>
                            <td>Returns week number (1-53)</td>
                            <td><code>SELECT d, WEEKOFYEAR(d) AS result FROM datetbl;</code></td>
                            <td><a href="weekofyear.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>YEAR()</td>
                            <td>Returns year</td>
                            <td><code>SELECT d, YEAR(d) AS result FROM datetbl;</code></td>
                            <td><a href="year.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>YEARWEEK()</td>
                            <td>Returns year and week number</td>
                            <td><code>SELECT d, YEARWEEK(d) AS result FROM datetbl;</code></td>
                            <td><a href="yearweek.php">View Output</a></td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="mt-5">Mysql Advanced Functions</h3>
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>SQL Function</th>
                            <th>Description</th>
                            <th>Example Code</th>
                            <th>Example Output</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>BIN</td>
                            <td>Returns the absolute value of a number</td>
                            <td><code>SELECT score, ABS(score-100) AS result FROM mytbl;</code></td>
                            <td><a href="bin.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>BINARY</td>
                            <td>Convert a value to a binary string</td>
                            <td><code>SELECT BINARY 'Hello' = 'hello';</code></td>
                            <td><a href="binary.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CASE</td>
                            <td>Go through conditions and return a value when the first condition is met</td>
                            <td><code>SELECT OrderID, Quantity,
                                    CASE
                                    WHEN Quantity > 30 THEN "The quantity is greater than 30"
                                    WHEN Quantity = 30 THEN "The quantity is 30"
                                    ELSE "The quantity is under 30"
                                    END
                                    FROM OrderDetails;</code></td>
                            <td><a href="case.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CAST</td>
                            <td>Changes a value from one type  another type.</td>
                            <td><code>SELECT CAST('2025-02-11' AS DATE);</code></td>
                            <td><a href="cast.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>COALESCE</td>
                            <td>Return the first non-null value in a list</td>
                            <td><code>SELECT COALESCE(NULL, NULL, NULL, 'W3Schools.com', NULL, 'Example.com');</code></td>
                            <td><a href="coalesce.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CONNECTION_ID</td>
                            <td>Returns the unique ID of your current database connection.</td>
                            <td><code>SELECT CONNECTION_ID();</code></td>
                            <td><a href="connection_id.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CONV</td>
                            <td>Converts a number from one base to another base.</td>
                            <td><code>SELECT CONV(15, 10, 2);</code></td>
                            <td><a href="conv.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CONVERT</td>
                            <td>changes a value from one datatype or character set another.</td>
                            <td><code>SELECT CONVERT("2017-08-29", DATE);</code></td>
                            <td><a href="convert.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>CURRENT_USER</td>
                            <td>Return the user name and host name for the MySQL account</td>
                            <td><code>SELECT CURRENT_USER();</code></td>
                            <td><a href="current_user.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>DATABASE</td>
                            <td>Returns the name of the database currently in use.</td>
                            <td><code>SELECT DATABASE();</code></td>
                            <td><a href="database.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>IF</td>
                            <td>returns a value if a condition is TRUE, or another value if a condition is FALSE.</td>
                            <td><code>SELECT IF(500<1000, "YES", "NO");</code></td>
                            <td><a href="if.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>IFNULL</td>
                            <td>returns a specified value if the expression is NULL</td>
                            <td><code>SELECT IFNULL(NULL, "W3Schools.com");</code></td>
                            <td><a href="ifnull.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>ISNULL</td>
                            <td>returns 1 or 0 depending on whether an expression is NULL. If expression is NULL, this function returns 1. Otherwise, it returns 0.</td>
                            <td><code>SELECT ISNULL(NULL);</code></td>
                            <td><a href="isnull.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>LAST_INSERT_ID</td>
                            <td>function returns the AUTO_INCREMENT id of the last row that has been inserted or updated in a table.</td>
                            <td><code>SELECT LAST_INSERT_ID();</code></td>
                            <td><a href="last_insert_id.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>NULLIF</td>
                            <td>compares two expressions and returns NULL if they are equal. Otherwise, the first expression is returned.</td>
                            <td><code>SELECT NULLIF(25, 25);</code></td>
                            <td><a href="nullif.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SESSION_USER</td>
                            <td> returns the current user name and host name for the MySQL connection.</td>
                            <td><code>SELECT SESSION_USER();</code></td>
                            <td><a href="session_user.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>SYSTEM_USER</td>
                            <td>returns the current user name and host name for the MySQL connection.</td>
                            <td><code>SELECT SYSTEM_USER();</code></td>
                            <td><a href="system_user.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>USER</td>
                            <td>returns the current user name and host name for the MySQL connection.</td>
                            <td><code>SELECT USER();</code></td>
                            <td><a href="user.php">View Output</a></td>
                        </tr>

                        <tr>
                            <td>VERSION</td>
                            <td>returns the current version of the MySQL database, as a string.</td>
                            <td><code>SELECT VERSION();</code></td>
                            <td><a href="version.php">View Output</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


</body>

</html>