 <?php
 // // ******* display data and time **********
// echo "Today is" .date("d/m/Y")." And The time is " . date("h:i:sa");
// // H - 24-hour format of an hour (00 to 23)
// // h - 12-hour format of an hour with leading zeros (01 to 12)
// // i - Minutes with leading zeros (00 to 59)
// // s - Seconds with leading zeros (00 to 59)
// // a - Lowercase Ante meridiem and Post meridiem (am or pm)
// }
// //**************time zone  ************************
// date_default_timezone_set("Africa/Cairo");
// echo date_default_timezone_get();
// // ****** diff betwen 2 dates*****************
// //   $reg = date_create("2022-01-09");
//   $now = date_create("now");

//   $diff = date_diff($reg, $now);
//   echo '<pre>';
//   print_r($diff);
//   echo '</pre>';
//   /*
// // ************************************************
//     Date And Time Functions

//     - date_default_timezone_get()

//     - date_default_timezone_set(timezone[Required])

//     - date_create(Date/Time[Optional], Timezone[Optional])
//     --- Time: Date/Time String || Current Time If NULL
//     --- Timezone: Timezone String || Current Timezone

//     - timezone_open(Timezone)

//     - checkdate(M, D, Y) => All Required
//     --- Validate A Gregorian Date

//     Will Cover Later
//     - date()
//     - date_format()

//   */

//   // Get Timezone

//   echo date_default_timezone_get() . "<br>";

//   // Print Date And Time

//   echo date("Y-m-d H:i:s") . "<br>";

//   // Change Timezone

//   date_default_timezone_set("Africa/Cairo");

//   // Print Date And Time Again

//   echo date("Y-m-d H:i:s") . "<br>";

//   // Get Timezone Again

//   echo date_default_timezone_get() . "<br>";

//   // Create Date Object

//   $d = date_create("", timezone_open("Indian/Antananarivo"));

//   // Echo Date With Format

//   echo date_format($d, "Y-m-d H:i:s");

//   // Check Date

//   echo "<br>";
//   var_dump(checkdate(10, 25, 1982));
//   echo "<br>";
//   var_dump(checkdate(31, 02, 1982));
//   echo "<br>";
//   var_dump(checkdate(31, 02, 3500));
//   echo "<br>";
//   var_dump(checkdate(-2, 02, 1982)); 

  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

//   date_default_timezone_set("Africa/Cairo");

//   // $d = date_create("2022-10-01 15:5:3");
//   $d = date_create();

//   // Year
//   echo date_format($d, "Y") . "<br>"; // 2022
//   echo date_format($d, "y") . "<br>"; // 22

//   // Month
//   echo date_format($d, "Y-m") . "<br>";
//   echo date_format($d, "Y-M") . "<br>";
//   echo date_format($d, "Y-F") . "<br>";
//   echo date_format($d, "t") . "<br>"; // 30

//   // Day
//   echo date_format($d, "Y-m-d") . "<br>";
//   echo date_format($d, "Y-m-j") . "<br>";
//   echo date_format($d, "Y-m-D") . "<br>";
//   echo date_format($d, "Y-m-l") . "<br>";
//   echo date_format($d, "Y-m-l z") . "<br>";
//   echo date_format($d, "Y-m-l djDl") . "<br>";
//   echo date_format($d, "Y-m-l S") . "<br>";



//   echo "You Are A Member For " . $diff->days . " Days<br>";

//   echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
//   echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
//   echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
//   echo date("Y-m-d M D H:i:s", strtotime("tomorrow", 
// strtotime("1982-10-25"))) . "<br>";